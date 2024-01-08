<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;

    public function pesanan_detail()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id', 'id');
    }

    public function product_detail()
    {
        return $this->belongsTo(product::class, 'product_id', 'id');
    }

    protected $fillable = [
        'pesanan_id',
        'product_id',
    ];
}
