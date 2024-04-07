<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',
        'genre_id',
        'restaurant_name',
        'restaurant_overview',
        'restaurant_image'
    ];

    public function area() {
        return $this->belongsTo('App\Models\Area');
    }

    public function genre() {
        return $this->belongsTo('App\Models\Genre');
    }

    // public function owner() {
        // return $this->belongsTo('App\Models\Owner');
    // }

    public function favorites() {
        return $this->hasMany('App\Models\Favorite');
    }

    public function reservations() {
        return $this->hasMany('App\Models\Reservation');
    }
}
