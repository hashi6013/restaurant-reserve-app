<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/thanks', [AuthController::class, 'thanks']);
    Route::get('/mypage', [RestaurantController::class, 'mypage']);
});
Route::get('/', [RestaurantController::class, 'index']);
Route::get('/search', [RestaurantController::class, 'search']);
Route::get('/detail/{shop_id}', [RestaurantController::class, 'detail']);
Route::post('/done', [ReservationController::class, 'store']);
Route::get('/restaurant/favorite/{id}', [FavoriteController::class, 'favorite'])->name('restaurant.favorite');
Route::get('/restaurant/unlike/{id}', [FavoriteController::class, 'unlike'])->name('restaurant.unlike');
Route::delete('/mypage/delete', [ReservationController::class, 'destroy']);
Route::get('/mypage/edit', [ReservationController::class, 'edit']);
Route::patch('/mypage/edit', [ReservationController::class, 'update']);
Route::get('/review', [RestaurantController::class, 'list']);
Route::post('/review/post', [RestaurantController::class, 'review']);

