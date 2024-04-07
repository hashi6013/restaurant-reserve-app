<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_name',
        'owner_email',
        'owner_password'
    ];

    // public function restaurant() {
        // return $this->hasOne('App\Models\Restaurant');
    // }
}
