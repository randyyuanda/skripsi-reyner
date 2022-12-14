<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('../auth/login');
});

Auth::routes();

Route::middleware(['klien'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/list-booking', [App\Http\Controllers\HomeController::class, 'listbooking']);
    Route::get('/create-booking', [App\Http\Controllers\HomeController::class, 'createbooking']);
    Route::get('/update-booking/{booking_id}', [App\Http\Controllers\HomeController::class, 'updateBooking']);
    Route::get('/detail-booking/{booking_id}', [App\Http\Controllers\HomeController::class, 'detailBooking']);
});
Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard-admin', [App\Http\Controllers\HomeController::class, 'homeAdmin']);
    Route::get('/list-klien', [App\Http\Controllers\HomeController::class, 'klienAdmin']);
    Route::get('/list-admin', [App\Http\Controllers\HomeController::class, 'listAdmin']);
    Route::get('/detail-klien/{klien_id}', [App\Http\Controllers\HomeController::class, 'detailKlienAdmin']);
    Route::get('/create-klien', [App\Http\Controllers\HomeController::class, 'createKlien']);
    Route::get('/create-admin', [App\Http\Controllers\HomeController::class, 'createAdmin']);
    Route::get('/all-book', [App\Http\Controllers\HomeController::class, 'allBook']);
    Route::get('/detail-booking-admin/{booking_id}', [App\Http\Controllers\HomeController::class, 'detailBookingAdmin']);
});

Route::get('generate-invoice-pdf', array('as' => 'generate.invoice.pdf', 'uses' => 'PDFController@generateInvoicePDF'));
