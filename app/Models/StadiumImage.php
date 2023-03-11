<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StadiumImage extends Model
{
    use HasFactory;

    protected $table = 'stadium_images';

    protected $fillable = [
        'stadium_id',
        'image',
    ];
}
