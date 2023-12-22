<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;



    public function product_detail()
    {
        return $this->hasMany(DetailPesanan::class, 'product_id', 'id');
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function pesanan()
    {
        return $this->belongsToMany(Pesanan::class);
    }

    protected $fillable =
    [
        'product_name',
        'product_desc',
        'product_image',
        'price',
        'color',
        'category_id',
    ];
}
