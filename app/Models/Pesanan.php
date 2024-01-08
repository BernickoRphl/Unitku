<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;


    public function pesanan_detail()
    {
        return $this->hasMany(DetailPesanan::class, 'pesanan_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function details()
    {
        return $this->hasMany(DetailPesanan::class);
    }

    public function products()
    {
        return $this->belongsToMany(product::class);
    }

    public function review()
    {
        return $this->hasOne(Review::class);
    }

    protected $fillable = [
        'tanggal_pemesanan',
        'image',
        'description',
        'jumlah',
        'address',
        'user_id',
        'status_id',
        'product_id',
        'review_id'
    ];
}
