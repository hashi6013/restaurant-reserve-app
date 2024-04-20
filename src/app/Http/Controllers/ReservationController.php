<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store(ReservationRequest $request)
    {
        $user = Auth::user();
        $restaurants = Restaurant::find($request->restaurant_id);
        $request['user_id'] = $user->id;
        Reservation::create($request->only([
            'reserve_date', 'reserve_time', 'reserve_number', 'restaurant_id', 'user_id'
        ]));
        return view('done');
    }
    public function destroy(Request $request)
    {

        // Reservation::find('id',  '=', $request->id)->delete();
        Reservation::find($request->id)->delete();
        return redirect('mypage');
    }
    
    
}
