<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // If users can have many roles (many-to-many relationship)
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user'); // Pivot table: 'role_user'
    }
}
