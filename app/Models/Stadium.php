<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\StadiumFactory;
use App\Models\Service;


class Stadium extends Model
{
    use HasFactory;

    protected $table = "stadiums";

    protected $fillable = [
        'name',
        'address',
        'iframe',
        'hour_price',
        'size',
        'join_date',
        'image',
        'user_id',
        'google_link',
    ];

    protected static function newFactory()
    {
        return StadiumFactory::new();
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }

    public function reviews(){
        return $this->hasMany(Comment::class);
    }

    public function rates(){
        return $this->hasMany(Rate::class);
    }

    public function images(){
        return $this->hasMany(StadiumImage::class);
    }

    public function rating(){
        $rating =0;
        
        foreach($this->rates as $r){
            
            $rating += $r->rate;
        }
        return ($rating / $this->whole_rate()) * 100;
    }

    private function whole_rate(){
        return $this->rates()->count('rate') == 0 ? 1 : $this->rates()->count('rate') * 5;
    }
}
