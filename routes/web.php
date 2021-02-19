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



Route::get('/aboutMe', function () {
    return View::make('aboutMe');
});

Route::get('/education', function () {
    return View::make('education');
});

Route::get('/personalInformation', function () {
    return View::make('personalInformation');
});

