<?php

use App\Http\Controllers\Api\RoomsController;
use App\Http\Controllers\BookingEngine;
use App\Http\Controllers\Pages\AboutUsPage;
use App\Http\Controllers\Pages\ContactUsPage;
use App\Http\Controllers\Pages\RoomsPage;
use App\Http\Controllers\Pages\SearchResultPage;
use App\Http\Controllers\WelcomeHome;
use App\Http\Livewire\Dashboard\Admin\BookingCalendarView;
use App\Http\Livewire\Dashboard\Admin\BookingInquiryView;
use App\Http\Livewire\Dashboard\Admin\BookingManageView;
use App\Http\Livewire\Dashboard\Admin\BookingReportView;
use App\Http\Livewire\Dashboard\Admin\ChatbotView;
use App\Http\Livewire\Dashboard\Admin\EmailView;
use App\Http\Livewire\Dashboard\Admin\GuestReportView;
use App\Http\Livewire\Dashboard\Admin\IndexView;
use App\Http\Livewire\Dashboard\Admin\ProfileSettingView;
use App\Http\Livewire\Dashboard\Admin\ReservationView;
use App\Http\Livewire\Dashboard\Admin\RoomManageView;
use App\Http\Livewire\Dashboard\Admin\RoomTypeManageView;
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
Route::post('/inquire-booking',[BookingEngine::class, 'saveReservation'])->name('inquire-booking');
Route::get('/available-rooms',[SearchResultPage::class, 'index'])->name('available-rooms');
Route::get('/our-rooms',[RoomsPage::class, 'index'])->name('rooms');
Route::get('/about-us',[AboutUsPage::class, 'index'])->name('about-us');
Route::get('/contact-us',[ContactUsPage::class, 'index'])->name('contact-us');
Route::post('/sending-contact',[ContactUsPage::class, 'submitContact'])->name('send-contact');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', IndexView::class)->name('dashboard');
    Route::get('/booking-reservations', ReservationView::class)->name('reservations');
    Route::get('/booking-inquiries', BookingInquiryView::class)->name('inquiries');
    Route::get('/bookings', BookingManageView::class)->name('bookings');
    Route::get('/calendar-and-bookings', BookingCalendarView::class)->name('calendar');
    Route::get('/rooms', RoomManageView::class)->name('manage-rooms');
    Route::get('/room-types', RoomTypeManageView::class)->name('manage-room-types');
    Route::get('/booking-reports', BookingReportView::class)->name('booking-reports');
    Route::get('/visitors-reports', GuestReportView::class)->name('guest-reports');
    Route::get('/chatbot', ChatbotView::class)->name('chatbot');
    Route::get('/email', EmailView::class)->name('email');
    Route::get('/account-settings', ProfileSettingView::class)->name('account-settings');


    
    Route::post('/create-room-type', [RoomsController::class, 'createRoomType'])->name('create-room-type');    
    Route::post('/create-room', [RoomsController::class, 'createRoom'])->name('create-room');
});
