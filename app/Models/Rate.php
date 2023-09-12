<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'rate',
        'user_id',
        'stadium_id',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function stadiums(){
        return $this->belongsTo(Stadium::class);
    }
}
