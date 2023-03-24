<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/list-booking/{users_id}', '\App\Http\Controllers\API\BookingController@listBooking');
Route::post('/create-booking', '\App\Http\Controllers\API\BookingController@createBooking');
Route::put('/update-booking/{booking_id}', '\App\Http\Controllers\API\BookingController@updateBooking');
Route::delete('/delete-user/{users_id}', '\App\Http\Controllers\API\UserController@deleteUser');
Route::delete('/delete-booking/{booking_id}', '\App\Http\Controllers\API\BookingController@deleteBook');
Route::put('/status-booking/{booking_id}/{status}', '\App\Http\Controllers\API\BookingController@changeStatusBook');
Route::get('/monthly-shipment/{year}', '\App\Http\Controllers\API\BookingController@monthlyShipment');
Route::get('/monthly-shipment-klien/{users_id}/{year}', '\App\Http\Controllers\API\BookingController@monthlyShipmentKlien');
Route::post('/upload-document/{booking_id}/{document}', '\App\Http\Controllers\API\DocumentController@uploadDocument');
Route::put('/update-document/{document_id}', '\App\Http\Controllers\API\DocumentController@updateDocument');
Route::put('/complete-booking/{booking_id}', '\App\Http\Controllers\API\BookingController@completeBooking');
Route::put('/change-password/{klien_id}', '\App\Http\Controllers\API\UserController@changePassword');
// Route::post('/generate-pdf', '\App\Http\Controllers\API\PDFController@generatePDF');
