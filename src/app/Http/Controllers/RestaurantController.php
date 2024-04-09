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
    public function thanks()
    {
        return view('done');
    }
}
