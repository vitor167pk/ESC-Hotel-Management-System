<?php

use App\Http\Controllers\PageController;
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
/*
Route::get('/', function () {return view('web.welcome');
});

Route::get('/web', function () {return view('web.dependecies');
});

Route::get('/web', function () {return view('web.about');
});

Route::get('/web', function () {return view('web.contact');
});
*/

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
//Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/guest-info-add', [PageController::class, 'guestInfoAdd'])->name('guest-info-add');
Route::get('/guest-booking', [PageController::class, 'guestBooking'])->name('guest-booking');
Route::post('/guest-booking-add', [PageController::class, 'guestBookingAdd'])->name('guest-booking-add');
//Route::get('/change-guest', [PageController::class, 'changeGuest'])->name('change-guest');
Route::get('/room-list', [PageController::class, 'roomList'])->name('room-list');
Route::post('/contact', [ContatoController::class, 'store'])->name('contact.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/bookings', function () {
        return view('booking.bookings');
    })->name('bookings');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/rooms-info', function () {
        return view('room-info.rooms-info');
    })->name('rooms-info');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/settings', function () {
        return view('setting.settings');
    })->name('settings');
});
