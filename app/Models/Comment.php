<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    
    use HasFactory;

    protected $fillable = [
        'comment',
        'user_id',
        'stadium_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function stadium(){
        return $this->belongsTo(Stadium::class);
    }
}
