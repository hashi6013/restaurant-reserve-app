<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'restaurant_id',
        'reserve_date',
        'reserve_time',
        'reserve_number'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function restaurant() {
        return $this->belongsTo('App\Models\Restaurant');
    }
    // public function restaurants() {
        // return $this->hasMany('App\Models\Restaurant');
    // }
}
