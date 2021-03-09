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
// dashboard
Route::get('/home', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.home');

// Calender
Route::get('/calender', [App\Http\Controllers\Admin\CalenderController::class, 'index'])->name('admin.calender');


// Calender
Route::get('/member', [App\Http\Controllers\Admin\MembersController::class, 'index'])->name('admin.member');
