<?php

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

Route::get('/', function () { return view('frontEnd.home'); });
Route::get('auction', function () { return view('frontEnd.auction'); });
Route::get('favorite', function () { return view('frontEnd.favorite'); });
Route::get('breeder', function () { return view('frontEnd.breeder'); });
Route::get('detailbidder', function () { return view('frontEnd.detailBidder'); });
Route::get('chart', function () { return view('frontEnd.auctionChart'); });
Route::get('profile', function () { return view('frontEnd.profile'); });

Route::get('register', function () { return view('frontEnd.register'); });
Route::get('login', function () { return view('frontEnd.login'); });
Route::get('lupaPassword', function () { return view('frontEnd.lupaPassword'); });
