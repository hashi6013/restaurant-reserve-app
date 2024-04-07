<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Genre;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::with('genre')->paninate(20);
        $genres = Restaurant::all();
        return view('index', compact('restaurants', genres));
    }
    public function thanks()
    {
        return view('done');
    }
}
