<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Genre;
use App\Models\Area;


class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::with('genre', 'area')->get();
        $genres = Genre::all();
        $areas = Area::all();
        return view('index', compact('restaurants', 'genres', 'areas'));
    }
    public function search(Request $request) {
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
    public function done()
    {
        return view('done');
    }
    public function thanks()
    {
        return view('thanks');
    }
    public function mypage()
    {
        return view('mypage');
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
