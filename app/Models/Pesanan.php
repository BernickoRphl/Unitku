<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    public function detail_pesanan()
    {
        return $this->hasOne(Detail_Pesanan::class);
    }

    public function validasi()
    {
        return $this->hasOne(Validasi::class);
    }

    protected $fillable = [
        'tanggal_pemesanan',
        'description'
    ];
}
