<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['image' => 'interior1.jpg'],
            ['image' => 'interior2.jpg'],
        ];

        DB::table('galeris')->insert($data);
    }
}
