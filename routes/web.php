<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TkiController;
use App\Http\Controllers\AuthController;
// use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/join', function () {
    return view('join');
});

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerProses']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

// Auth::routes(['verify' => true]);

Route::get('/join', [TkiController::class, 'create']);
Route::get('/success', [TkiController::class,