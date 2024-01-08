<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function create(Pesanan $pesanan)
    {
        return view('review_add', compact('pesanan'));
    }

    public function store(Request $request, Pesanan $pesanan)
    {

        $pesanan->review()->create([
            'description' => $request->input('description'),
        ]);

        return redirect()->route('pesanan.list'); 
    }
}
