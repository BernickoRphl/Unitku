<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'is_login',
        'is_active',
    ];

    // public function role()
    // {
    //     return $this->belongsTo(Role::class);
    // }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function isSuperadmin(): bool
    {
        if ($this->role_id == 1) {
            return true;
        }
        return false;
    }
    public function isAdmin(): bool
    {
        if ($this->role_id == 2) {
            return true;
        }
        return false;
    }
    public function isCustomer(): bool
    {
        if ($this->role_id == 3) {
            return true;
        }
        return false;
    }
    public function pesanans()
    {
        return $this->hasMany(Pesanan::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
