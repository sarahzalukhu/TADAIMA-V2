<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('review', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:1000'
        ]);

        Review::create([
            'content' => $request->content
        ]);

        return redirect()->route('review.index')->with('success', 'Ulasan berhasil dikirim!');
    }
}
