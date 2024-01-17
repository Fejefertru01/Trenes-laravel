<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('tickets')->insert([
            [
                'date' => '2024-01-17',
                'price' => '30',
                'train_id' => 1,
                'ticket_type_id' => 1
            ],
            [
                'date' => '2019-12-31',
                'price' => '50',
                'train_id' => 2,
                'ticket_type_id' => 2
            ],
            [
                'date' => '2001-03-20',
                'price' => '70',
                'train_id' => 3,
                'ticket_type_id' => 3
            ]
        ]);
    }
}
