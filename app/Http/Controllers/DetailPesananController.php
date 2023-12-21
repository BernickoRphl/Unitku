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
    public function delete(Detail_Pesanan $detailPesanan)
    {
        $detailPesanan->delete();

        return redirect()->route('pesanans.show', $detailPesanan->pesanan_id)->with('success', 'Detail Pesanan deleted successfully');
    }
}
