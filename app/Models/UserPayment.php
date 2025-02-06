<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPayment extends Model
{
    use HasFactory;

    protected $table = 'user_payments';

    protected $fillable = [
        'user_id',
        'name_on_card',
        'credit_card_number',
        'cvv',
        'expiration_date',
        'is_active',
    ];

    // A payment belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
