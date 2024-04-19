<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Reservation;
use App\Models\Genre;
use App\Models\Area;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index(Favorite $favorite)
    {
        $restaurants = Restaurant::with('genre', 'area')->get();
        $genres = Genre::all();
        $areas = Area::all();
        return view('index', compact('restaurants', 'genres', 'areas'));
    }
    
    public function search(Request $request)
    {
        $query = Restaurant::query();

        $query = $this->getSearchQuery($request, $query);

        $restaurants = $query->get();

        $areas = Area::all();

        $genres =Genre::all();
        // $areas = Area::all();
        return view('index', compact('areas', 'genres', 'restaurants'));
    }
    public function detail($id)
    {
        $detail = Restaurant::find($id);
        return view('detail', compact('detail'));
    }
    public function mypage()
    {
        $users = Auth::user();
        $profiles = Reservation::where('user_id',  '=', Auth::user()->id)->get();
        $favorites = Favorite::where('user_id', '=', Auth::user()->id)->get();
        return view('mypage', compact('users', 'profiles', 'favorites'));
    }
   

    private function getSearchQuery($request, $query)
    {
        if(!empty($request->keyword)) {
            $query->where('restaurant_name', 'like', '%' . $request->keyword . '%');
        }
        if(!empty($request->area_id)) {
            $query->where('area_id', '=', $request->area_id);
        }
        if(!empty($request->genre_id)) {
            $query->where('genre_id', '=', $request->genre_id);
        }
        return $query;
    }
}
