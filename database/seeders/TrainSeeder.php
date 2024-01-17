<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('trains')->insert([
            [
                'name' => 'Tren Bala',
                'passengers' => '100',
                'year' => 2007,
                'train_type_id' => 1
            ],
            [
                'name' => 'Tren de la bruja',
                'passengers' => '200',
                'year' => 2001,
                'train_type_id' => 2
            ],
            [
                'name' => 'Tren Peninsular',
                'passengers' => '300',
                'year' => 2019,
                'train_type_id' => 3
            ]
        ]);
    }
}
