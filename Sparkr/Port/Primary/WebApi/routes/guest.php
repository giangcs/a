<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Guest Routes
|--------------------------------------------------------------------------
|
| Here is where you can register guest routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "public" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
