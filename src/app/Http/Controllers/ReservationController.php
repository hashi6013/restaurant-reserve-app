<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;




class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $restaurants = Restaurant::find($request->restaurant_id);
        // $reservations = $request->only(['reserve_date', 'reserve_time', 'reserve_number']);
        // dd($reservations, $user, $restaurants);
        // Reservation::create([$reservations, 'user_id' => $user->id]);
        // dd($users);
        $request['user_id'] = $user->id;
        Reservation::create($request->only([
            'reserve_date', 'reserve_time', 'reserve_number', 'restaurant_id', 'user_id'
        ]));
        return view('done');
    }
    
}
