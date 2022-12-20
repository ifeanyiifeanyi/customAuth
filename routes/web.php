<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::controller(UserController::class)->middleware(['guest'])->group(function(){
    Route::get('/','index')->name('login');
    Route::get('/register','Register')->name('register');
    Route::get('/forgot-password','ForgotPassword')->name('forgot.password');
    Route::get('/reset-password','ResetPassword')->name('reset.password');

    Route::post('/register', 'RegisterUser')->name('register.user');

});
