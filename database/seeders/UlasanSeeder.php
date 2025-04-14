<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UlasanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ulasans')->insert([
            [
                'menu_id' => 7, // Sesuaikan dengan ID menu yang ada
                'name' => 'Andi Saputra',
                'rating' => 5,
                'comment' => 'Makanan enak dan pelayanan sangat ramah! Ramen-nya juara!'
            ],
            [
                'menu_id' => 8,
                'name' => 'Dewi Lestari',
                'rating' => 4,
                'comment' => 'Tempatnya nyaman, makanan oke. Recommended!'
            ]
        ]);
    }
}

