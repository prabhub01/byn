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

// Team
Route::get('/team', [App\Http\Controllers\Admin\TeamController::class, 'index'])->name('admin.team');
Route::post('/team-store', [App\Http\Controllers\Admin\TeamController::class, 'store'])->name('admin.team-store');

// Advisors Club
Route::get('/advisor-club', [App\Http\Controllers\Admin\AdvisorController::class, 'index'])->name('admin.advisor-club');
Route::post('/advisor-store', [App\Http\Controllers\Admin\AdvisorController::class, 'store'])->name('admin.advisor-store');

// Youth Members
Route::get('/member', [App\Http\Controllers\Admin\MembersController::class, 'index'])->name('admin.member');
Route::get('/member-details/{id}', [App\Http\Controllers\Admin\MembersController::class, 'viewDetails'])->name('admin.member-details');
Route::post('/import', [App\Http\Controllers\Admin\MembersController::class, 'import'])->name('admin.import');

// Message/Contat form submission
Route::get('/inbox', [App\Http\Controllers\Admin\InboxController::class, 'index'])->name('admin.inbox');

// Minute
Route::get('/add-minute', [App\Http\Controllers\Admin\MinuteController::class, 'index'])->name('admin.add-minute');
Route::post('/add-minute', [App\Http\Controllers\Admin\MinuteController::class, 'store'])->name('admin.add-minute');
Route::get('/view-minute', [App\Http\Controllers\Admin\MinuteController::class, 'show'])->name('admin.view-minute');

// About
Route::get('/about', [App\Http\Controllers\Admin\AboutController::class, 'show'])->name('admin.about');
Route::post('/create-about/{id}', [App\Http\Controllers\Admin\AboutController::class, 'update'])->name('admin.create-about');

// Contact
Route::get('/contact', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contact');
Route::post('/update-contact/{id}', [App\Http\Controllers\Admin\ContactController::class, 'update'])->name('admin.update-contact');

// Activities
Route::get('/activities', [App\Http\Controllers\Admin\ActivitiesController::class, 'index'])->name('admin.activities');
Route::post('/store-activity', [App\Http\Controllers\Admin\ActivitiesController::class, 'store'])->name('admin.store-activity');
Route::get('/edit/{id}', [App\Http\Controllers\Admin\ActivitiesController::class, 'edit'])->name('admin.edit-activity');
Route::post('/update/{id}', [App\Http\Controllers\Admin\ActivitiesController::class, 'update'])->name('admin.update-activity');

// External Links
Route::get('/external-links', [App\Http\Controllers\Admin\ExternalLinkController::class, 'index'])->name('admin.external_links');
Route::post('/external-links/{id}', [App\Http\Controllers\Admin\ExternalLinkController::class, 'update'])->name('admin.update_external_links');

//Reports
Route::get('/reports', [App\Http\Controllers\Admin\ReportController::class, 'index'])->name('admin.reports');
