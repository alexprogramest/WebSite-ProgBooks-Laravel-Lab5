<?php

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

Route::get('/', function () {

    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/searchbook', 'App\Http\Controllers\BookController@searchBook');

Route::get('/about', function () {
    return view('about');
});

Route::get('/sign_in_or_sign_up', function () {
    return view('sign_in_or_sign_up');
});

Route::get('/statistics', function () {
    return view('statistics');
});

Route::get('/premium', function () {
    return view('premium');
});

Route::post('/sign_in_or_sign_up', 'App\Http\Controllers\UserInfoController@getUserInfo');
Route::post('/premium', 'App\Http\Controllers\UserInfoController@buyPremium');


