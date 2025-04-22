<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel menus.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();  // Membuat kolom id dengan tipe auto increment
            $table->string('nama');  // Kolom untuk nama menu
            $table->text('deskripsi')->nullable();  // Kolom deskripsi menu (opsional)
            $table->decimal('harga', 10, 2);  // Kolom harga menu dengan tipe decimal
            $table->string('gambar');  // Kolom untuk nama file gambar
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    /**
     * Balikkan migrasi untuk menghapus tabel menus.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
 