{{-- resources/views/review.blade.php --}}
@extends('layouts.app')

@section('content')
<div style="background: #eee; padding: 20px 0; min-height: 100vh;">
    <div style="width: 90%; max-width: 700px; margin: auto; background: white; padding: 20px; border-radius: 5px;">
        <h2 style="margin-bottom: 20px;">Ulasan</h2>

        @if(session('success'))
            <div style="background: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 15px;">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('review.store') }}" method="POST" style="margin-bottom: 20px;">
            @csrf
            <textarea name="content" rows="4" placeholder="Ketikkan masukan dan penilaiannya..." style="width: 100%; padding: 10px; border: 1px solid #999; resize: none;"></textarea>
            <button type="submit" style="float: right; margin-top: 5px; padding: 8px 15px; background-color: #990000; color: white; border: none; border-radius: 4px;">➤</button>
        </form>

        <p style="font-size: 14px; color: #444;">
            Ulasan anda sangat penting untuk membangun kepercayaan pengunjung lain, mengumpulkan masukan berharga,
            serta memperbaiki layanan dan kualitas kami berdasarkan feedback yang anda berikan.
        </p>

        <hr style="margin: 30px 0;">

        <div>
            @foreach($reviews as $review)
                <div style="margin-bottom: 20px; padding: 15px; background: #f9f9f9; border-left: 4px solid #990000; border-radius: 4px;">
                    {{ $review->content }}
                    <div style="font-size: 12px; color: #666; text-align: right;">{{ $review->created_at->diffForHumans() }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
