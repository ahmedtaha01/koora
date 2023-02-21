<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\StadiumFactory;
use App\Models\Service;
use App\Models\AMatch;

class Stadium extends Model
{
    use HasFactory;

    protected $table = "stadiums";

    protected static function newFactory()
    {
        return StadiumFactory::new();
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function matchs(){
        return $this->hasMany(AMatch::class);
    }
}
