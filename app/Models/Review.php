<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public static function getReview($id)
    {
        return self::find($id);
    }

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }

    protected $fillable = [
        'description'
    ];
}
