<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $filllable =
    [
        'product_name',
        'product_desc',
        'product_image',
    ];
}
