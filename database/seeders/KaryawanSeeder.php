<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'name' => 'Tolhas Siabagariang',
                'position' => 'Head Chef',
                'phone' => '081234567890',
                'email' => 'tolhas.tanaka@example.com',
                'image' => 'tolhas_tanaka.jpg',
            ],
            [
                'name' => 'Sakura Yamada',
                'position' => 'Sous Chef',
                'phone' => '081234567891',
                'email' => 'sakura.yamada@example.com',
                'image' => 'sakura_yamada.jpg',
            ],
        ];

        DB::table('karyawans')->insert($data);
    }
}
