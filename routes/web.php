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

// Route::get('/', function () {
//     return view('welcome');
// });


//Home/Index Page
Route::get('/index', [App\Http\Controllers\HomeController::class, 'show'])->name('index');

//About Page
Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'show'])->name('about-us');

//About Page
Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'show'])->name('about-us');
