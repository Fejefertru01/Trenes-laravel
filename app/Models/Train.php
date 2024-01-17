<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;
    public function tickets(){
        return $this->hasMany(Train::class);
    }

    public function train_type() {
        return $this->belongsTo(TicketType::class);
    }
}
