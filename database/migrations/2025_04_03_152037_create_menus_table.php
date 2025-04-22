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
            $table->id(); // ID menu sebagai primary key
            $table->foreignId('kategori_id')->constrained('kategoris')->onDelete('cascade'); // Foreign key untuk kategori
            $table->string('name'); // Nama menu
            $table->decimal('price', 10, 2); // Harga menu
            $table->string('image')->nullable(); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
}
 