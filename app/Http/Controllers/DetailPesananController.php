<?php

namespace App\Http\Controllers;

use App\Models\Detail_Pesanan;
use Illuminate\Http\Request;

class DetailPesananController extends Controller
{
    public function show_detail_pesanan(Detail_Pesanan $detail){
        return view('detail_pesanan',
            [
                'detail_pesanan' => $detail
            ],
        );
    }
}
