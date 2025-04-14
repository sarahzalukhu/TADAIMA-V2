<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $fillable = ['menu_id', 'name', 'rating', 'comment']; // Kolom yang bisa diisi

    public function menu() {
        return $this->belongsTo(Menu::class);
    }
}
