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

// Youth Members
Route::get('/member', [App\Http\Controllers\Admin\MembersController::class, 'index'])->name('admin.member');

// Message/Contat form submission
Route::get('/messages', [App\Http\Controllers\Admin\MessagesController::class, 'index'])->name('admin.messages');

// Minute
Route::get('/add-minute', [App\Http\Controllers\Admin\MinuteController::class, 'index'])->name('admin.add-minute');
Route::post('/add-minute', [App\Http\Controllers\Admin\MinuteController::class, 'store'])->name('admin.add-minute');
Route::get('/view-minute', [App\Http\Controllers\Admin\MinuteController::class, 'show'])->name('admin.view-minute');

// About
Route::get('/about', [App\Http\Controllers\Admin\AboutController::class, 'show'])->name('admin.about');
Route::get('/team', [App\Http\Controllers\Admin\AboutController::class, 'team'])->name('admin.team');
Route::get('/advisor-club', [App\Http\Controllers\Admin\AboutController::class, 'advisorClub'])->name('admin.advisor-club');

// Contact
Route::get('/contact', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contact');

// Activities
Route::get('/activities', [App\Http\Controllers\Admin\ActivitiesController::class, 'index'])->name('admin.activities');
