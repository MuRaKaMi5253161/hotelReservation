<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;
use App\Models\Hotel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//予約フォーム
Route::get('/', [ReservationController::class, 'reservationSearch']);
Route::post('/reservationInput', [ReservationController::class, 'reservationInput']);
Route::post('/reservationCustomerInput', [ReservationController::class, 'reservationCustomerInput']);
Route::post('/reservationConf', [ReservationController::class, 'reservationConf']);
Route::post('/reservationDecision', [ReservationController::class, 'reservationDecision']);
Route::post('/hotelList', [HotelController::class, 'hotelInfoPost']);
Route::post('/hotelDetail', [HotelController::class, 'hotelDetailPost']);
Route::post('/hotelListSearch', [HotelController::class, 'hotelListSearch']);
