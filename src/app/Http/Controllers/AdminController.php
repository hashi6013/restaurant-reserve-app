<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.home');
    }
    public function confirm(Request $request)
    {
        $request['role'] = "owner";
        $request['email_verified_at'] = now();
        $request['password'] = bcrypt($request['password']);
        $owner = $request->only(['name', 'email', 'password']);
        return $owner;
        return view('admin.confirm');
    }
}
