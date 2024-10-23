<?php

use App\Http\Controllers\todocontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', [todocontroller::class, 'about']);
Route::get('/contact', [todocontroller::class, 'contact']);
Route::get('/', [todocontroller::class, 'welcome']);
