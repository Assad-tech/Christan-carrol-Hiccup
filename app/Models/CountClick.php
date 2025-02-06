<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountClick extends Model
{
    use HasFactory;

    protected $table = 'count_clicks';

    protected $fillable = [
        'user_id',
        'count',
        'is_active',
    ];

    // A click belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
