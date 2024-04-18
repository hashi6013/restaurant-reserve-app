<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FavoriteController;
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
Route::post('/done', [ReservationController::class, 'store']);
Route::get('/detail/{shop_id}', [RestaurantController::class, 'detail']);
Route::get('/done', [RestaurantController::class, 'done']);
Route::get('/thanks', [AuthController::class, 'thanks']);
Route::middleware('auth')->group(function () {
    Route::get('/mypage', [RestaurantController::class, 'mypage']);
});
Route::get('/restaurant/favorite/{id}', [FavoriteController::class, 'favorite'])->name('restaurant.favorite');
Route::get('/restaurant/unlike/{id}', [FavoriteController::class, 'unlike'])->name('restaurant.unlike');


