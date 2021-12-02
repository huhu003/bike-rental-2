<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
<<<<<<< HEAD
use App\Http\Controllers\AdminController;
=======
>>>>>>> 865a1c0904332533bbc1b8a9f808ba870324f8e5
use App\Http\Controllers\CheckoutController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function() {
    return auth()->user();
});
Route::middleware('auth:api')->get('/admin', function() {
    return auth()->user();
});
Route::post('login',[LoginController::class,'login']);
Route::post('register',[LoginController::class,'signup']);
Route::post('update',[ProfileController::class,'update'])->name('update');

Route::post('save-profile',[ProfileController::class,'store']);
Route::post('submit-return',[ProfileController::class,'Rentalreturn']);
<<<<<<< HEAD
Route::post('confirm-return',[ProfileController::class,'Confirmreturn']);
////

Route::post('pre-checkout',[CheckoutController::class, 'checkout'])->name('checkout');

=======
Route::post('pre-checkout',[CheckoutController::class, 'checkout'])->name('checkout');
>>>>>>> 865a1c0904332533bbc1b8a9f808ba870324f8e5
