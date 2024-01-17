<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;



    public function product_detail()
    {
        return $this->hasMany(DetailPesanan::class, 'product_id', 'id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }

    public function pesanans()
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
        'edition_id',
    ];
}
