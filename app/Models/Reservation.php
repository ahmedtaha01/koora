<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'matchs';

    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'stadium_id',
        'code',
        'money',
        'status',
        'hours',
        'date'
    ];

    public function stadium(){
        return $this->belongsTo(Stadium::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
