<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketType;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketTypes =TicketType::all();
        return view('ticketTypes/index',['ticketTypes'=>$ticketTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ticketTypes/create', ['ticketTypes' => TicketType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticketType = new TicketType;
        $ticketType->type = $request->input('type');
        $ticketType->save();
        
        return redirect('ticketTypes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('ticketTypes/show', ['ticketType' => TicketType::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('ticketTypes/edit', ['ticketType' => ticketType::find($id), 'ticketTypes' => TicketType::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticketType = TicketType::find($id);
        $ticketType->type = $request->input('type');
        $ticketType->save();
        return redirect('ticketTypes');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TicketType::find($id)->delete();
        return redirect('ticketTypes');
    }
}
