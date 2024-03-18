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

Auth::routes();

Route::middleware(['auth', 'check.role:1'])
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function() {
        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    });

Route::get('{any?}', function() {
    return view('guests.home');
})->where('any', '.*')->name('guest.home');