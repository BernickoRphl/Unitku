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

    public function product_review()
    {
        return $this->belongsTo(product::class);
    }

    protected $fillable = [
        'description'
    ];
}
