<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'match_id',
        'transaction_id',
        'payment_gateway',
        'transaction_datetime',
        'amount',
        'currency',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function reservation(){
        return $this->belongsTo(Reservation::class,'match_id');
    }
}
