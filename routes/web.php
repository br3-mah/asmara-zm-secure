<?php

use App\Http\Controllers\BookingEngine;
use App\Http\Controllers\WelcomeHome;
use App\Http\Livewire\ResultPage;
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

Route::get('/', [WelcomeHome::class, 'index'])->name('welcome');
Route::post('/checking-availability',[BookingEngine::class, 'checkRoomAvailability'])->name('check-availability');
Route::get('/available-rooms/{data}',ResultPage::class)->name('available-rooms');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');



});
