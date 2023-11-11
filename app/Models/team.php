<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public static function getTeam($id)
    {
        return self::find($id);
    }

    protected $fillable = [
        'name',
        'position',
        'team_image',
        'desc',
    ];
}
