<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [RestaurantController::class, 'index']);
Route::get('/search', [RestaurantController::class, 'search']);
Route::get('/detail/{shop_id}', [RestaurantController::class, 'detail']);
Route::get('/done', [RestaurantController::class, 'done']);
Route::get('/thanks', [RestaurantController::class, 'thanks']);
Route::middleware('auth')->group(function () {
    Route::get('/mypage', [RestaurantController::class, 'mypage']);
});
