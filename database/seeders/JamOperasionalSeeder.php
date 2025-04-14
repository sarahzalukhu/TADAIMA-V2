<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JamOperasionalSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['day' => 'Senin', 'open_time' => '10:00:00', 'close_time' => '22:00:00'],
            ['day' => 'Selasa', 'open_time' => '10:00:00', 'close_time' => '22:00:00'],
        ];

        DB::table('jam_operasional')->insert($data);
    }
}
    