<?php

use App\Http\Controllers\GoogleLoginController;
use Illuminate\Support\Facades\Route;
use Kreait\Laravel\Firebase\Facades\Firebase;

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
Route::get('login/google', [GoogleLoginController::class, 'redirectToProvider']);
Route::get('login/google/callback', [GoogleLoginController::class, 'handleProviderCallback']);


Route::get('/', function () {
    return view('welcome');
});
