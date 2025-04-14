<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    // Menampilkan daftar menu
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index', compact('menus'));
    }

    // Menampilkan form tambah menu
    public function create()
    {
        return view('menu.create');
    }

    // Menyimpan menu baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'kategori_id' => 'required|exists:kategoris,id', // Perbaikan dari category_id ke kategori_id
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $menu = new Menu($request->all());

        // Upload gambar jika ada
        if ($request->hasFile('image')) {
            $menu->image = $request->file('image')->store('menu_images', 'public');
        }

        $menu->save();
        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    // Menampilkan satu menu
    public function show(Menu $menu)
    {
        return view('menu.show', compact('menu'));
    }

    // Menampilkan form edit menu
    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    // Menyimpan perubahan menu
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'kategori_id' => 'required|exists:kategoris,id', // Perbaikan dari category_id ke kategori_id
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $menu->fill($request->all());

        // Update gambar jika ada gambar baru yang diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($menu->image) {
                Storage::disk('public')->delete($menu->image);
            }
            // Simpan gambar baru
            $menu->image = $request->file('image')->store('menu_images', 'public');
        }

        $menu->save();
        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui.');
    }

    // Menghapus menu
    public function destroy(Menu $menu)
    {
        // Hapus gambar jika ada sebelum menghapus menu
        if ($menu->image) {
            Storage::disk('public')->delete($menu->image);
        }

        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus.');
    }
}
