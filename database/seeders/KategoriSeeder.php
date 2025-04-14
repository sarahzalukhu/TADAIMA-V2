<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['name' => 'Makanan'],
            ['name' => 'Minuman'],
            ['name' => 'Cemilan'],
        ];

        DB::table('kategoris')->insert($data);
    }
}
