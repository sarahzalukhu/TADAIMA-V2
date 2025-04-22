<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $menus = [
            ['nama' => 'Japanese Kare Ramen', 'harga' => 36000, 'gambar' => 'menu1.JPG'],
            ['nama' => 'Chicken Katsu Dry Ramen', 'harga' => 28000, 'gambar' => 'menu2.JPG'],
            ['nama' => 'Japanese Tori Paitan Ramen', 'harga' => 32000, 'gambar' => 'menu3.JPG'],
            ['nama' => 'Kare Dry Ramen', 'harga' => 30000, 'gambar' => 'menu4.JPG'],
            ['nama' => 'Black Pepper Beef Rice Bowl', 'harga' => 36000, 'gambar' => 'menu5.JPG'],
            ['nama' => 'Karage Dry Ramen', 'harga' => 30000, 'gambar' => 'menu6.JPG'],
            ['nama' => 'Doriyaki Rice', 'harga' => 36000, 'gambar' => 'menu7.JPG'],
            ['nama' => 'Kampung Style Fried Rice', 'harga' => 35000, 'gambar' => 'menu8.JPG'],
            ['nama' => 'Seafood Fried Rice', 'harga' => 35000, 'gambar' => 'menu9.JPG'],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
