<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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

Route::get('/', function () {
    $test = new User();
    dd($test);
    return view('welcome');
});

Route::get('/bonjour', function () {
    return view('bonjour');
});

Route::get('/login', function () {
    return view('monformulaire');
});

