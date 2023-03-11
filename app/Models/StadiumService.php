<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StadiumService extends Model
{
    use HasFactory;

    protected $table = 'service_stadium';

    protected $fillable = [
        'stadium_id',
        'service_id',
    ];
}
