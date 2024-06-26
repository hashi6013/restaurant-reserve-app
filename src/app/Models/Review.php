<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'restaurant_id',
        'stars',
        'comment'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function restaurant() {
        return $this->belongsTo('App\Models\Restaurant');
    }
}
