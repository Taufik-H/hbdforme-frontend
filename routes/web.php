<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Livewire\{GirlFriend};


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
    return view('welcome');
});
// livewire route :
Route::get('/gf', function () {
    return view('girlfriend');
});
Route::get('/my', function () {
    return view('yourself');
});


