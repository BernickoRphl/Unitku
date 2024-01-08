<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function pesanan()
    {
        return $this->hasOne(Pesanan::class, 'pesanan_id');
    }

    protected $fillable = [
        'description'
    ];
}
