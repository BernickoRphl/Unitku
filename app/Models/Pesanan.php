<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;


    public function products()
    {
        return $this->belongsToMany(Product::class, 'detail_pesanans', 'pesanan_id', 'product_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function details()
    {
        return $this->hasMany(DetailPesanan::class);
    }
    protected $fillable = [
        'tanggal_pemesanan',
        'description',
        'jumlah',
        'address',
        'user_id',
        'status_id'
    ];
}
