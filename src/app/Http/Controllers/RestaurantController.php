<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Reservation;
use App\Models\Genre;
use App\Models\Area;
use App\Models\Favorite;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RestaurantRequest;

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

    public function list(Request $request)
    {
        $review = Restaurant::find($request->id);
        $user = Auth::user();
        return view('review', compact('review', 'user'));
    }

    public function review(RestaurantRequest $request)
    {
        $user = Auth::user();
        $restaurants = Restaurant::find($request->restaurant_id);
        $request['user_id'] = $user->id;
        Review::create($request->only([
            'stars', 'comment', 'restaurant_id', 'user_id'
        ]));
        return view('post');
    }
}
