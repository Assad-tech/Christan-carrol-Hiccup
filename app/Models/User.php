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
        'full_name',
        'email',
        'password',
        'phone',
        'image',
        'is_active',
        'email_verified_at',
    ];

    // If each user has one role (one-to-many relationship)
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // If users can have many roles (many-to-many relationship)
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user'); // Pivot table: 'role_user'
    }

    // A user can have many payments
    public function payments()
    {
        return $this->hasMany(UserPayment::class);
    }

    // A user can have many clicks
    public function clicks()
    {
        return $this->hasMany(CountClick::class);
    }

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
}
