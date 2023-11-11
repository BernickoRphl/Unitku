<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

    public static function getTeam($id)
    {
        return self::teams() -> firstWhere('id', $id);
    }

    protected $filllable =
    [
        'name',
        'position',
        'team_image',
    ];
}
