<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Menu Makanan
            ['name' => 'Ramen Spesial', 'price' => 45000, 'kategori_id' => 1, 'image' => 'ramen.jpg'],
            ['name' => 'Katsu Don', 'price' => 40000, 'kategori_id' => 1, 'image' => 'katsu_don.jpg'],

            // Menu Minuman
            ['name' => 'Matcha Latte', 'price' => 25000, 'kategori_id' => 2, 'image' => 'matcha_latte.jpg'],
            ['name' => 'Ocha', 'price' => 15000, 'kategori_id' => 2, 'image' => 'ocha.jpg'],

            // Menu Cemilan
            ['name' => 'Takoyaki', 'price' => 30000, 'kategori_id' => 3, 'image' => 'takoyaki.jpg'],
            ['name' => 'Edamame', 'price' => 20000, 'kategori_id' => 3, 'image' => 'edamame.jpg'],
        ];

        DB::table('menus')->insert($data);
    }
}
