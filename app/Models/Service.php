<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stadium;

class Service extends Model
{
    use HasFactory;

    public function stadiums()
    {
        return $this->belongsToMany(Stadium::class);
    }
}
