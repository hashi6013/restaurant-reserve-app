<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;


class FavoriteController extends Controller
{
    public function favorite($id)
    {
        Favorite::create([
            'restaurant_id' => $id,
            'user_id' => Auth::id()
        ]);
        return redirect()->back();
    }
    
    public function unlike($id)
    {
        $favorite = Favorite::where('restaurant_id', $id)->where('user_id', Auth::id())->first();
        $favorite->delete();

        return redirect()->back();
    }
}
