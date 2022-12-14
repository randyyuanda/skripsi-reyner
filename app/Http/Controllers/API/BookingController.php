<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PDO;

class BookingController extends Controller
{
  public function listBooking()
  {
    $listbooking = Booking::orderBy('orders_id', 'desc')->where('users_id', Auth::user()->id)->get();
    return response()->json($listbooking);
  }
  public function createBooking(Request $request)
  {
    $request->validate([
      'pelabuhan_muat' => 'required',
      'pelabuhan_tujuan' => 'required',
      'final_destination' => 'required',
      'vessel_name' => 'required',
      'date_shipment' => 'required',
      'consignee' => 'required',
      'container_no' => 'required',
      'shipper' => 'required',
      'notify_party' => 'required',
      'shipping_marks' => 'required',
      'description_goods' => 'required',
      'total_nett_weight' => 'required',
      'total_gross_weight' => 'required',
      'total_measurement' => 'required',
      'users_id' => 'required',
    ]);

    $newBooking = new Booking([
      'pelabuhan_muat' => $request->get('pelabuhan_muat'),
      'pelabuhan_tujuan' => $request->get('pelabuhan_tujuan'),
      'final_destination' => $request->get('final_destination'),
      'vessel_name' => $request->get('vessel_name'),
      'date_shipment' => $request->get('date_shipment'),
      'consignee' => $request->get('consignee'),
      'container_no' => $request->get('container_no'),
      'shipper' => $request->get('shipper'),
      'notify_party' => $request->get('notify_party'),
      'shipping_marks' => $request->get('shipping_marks'),
      'description_goods' => $request->get('description_goods'),
      'total_nett_weight' => $request->get('total_nett_weight'),
      'total_gross_weight' => $request->get('total_gross_weight'),
      'total_measurement' => $request->get('total_measurement'),
      'users_id' => $request->get('users_id'),
    ]);

    $newBooking->save();
    return response()->json($newBooking);
  }

  public function updateBooking(Request $request, $booking_id)
  {
    $book = Booking::where('booking_id', $booking_id)->first();
    $book->description_goods = $request->get('description_goods');
    $book->total_nett_weight = $request->get('total_nett_weight');
    $book->total_gross_weight = $request->get('total_gross_weight');
    $book->total_measurement = $request->get('total_measurement');
    $book->save();
    return response()->json($book);
  }

  public function monthlyShipment()
  {
    $book = Booking::where('date_shipment', 'like', Carbon::now()->year . '%')->get()
      ->groupBy(function ($date) {
        return Carbon::parse($date->date_shipment)->format('m'); // grouping by months
      });
    $bookmcount = [];
    $bookArr = [];

    foreach ($book as $key => $value) {
      $bookmcount[(int)$key] = count($value);
    }

    for ($i = 1; $i <= 12; $i++) {
      if (!empty($bookmcount[$i])) {
        array_push($bookArr, $bookmcount[$i]);
      } else {
        array_push($bookArr, 0);
      }
    }
    return response()->json($bookArr);
  }

  public function monthlyShipmentKlien($klien)
  {
    $book = Booking::where('date_shipment', 'like', Carbon::now()->year . '%')->where('users_id', $klien)->get()
      ->groupBy(function ($date) {
        return Carbon::parse($date->date_shipment)->format('m'); // grouping by months
      });
    $bookmcount = [];
    $bookArr = [];

    foreach ($book as $key => $value) {
      $bookmcount[(int)$key] = count($value);
    }

    for ($i = 1; $i <= 12; $i++) {
      if (!empty($bookmcount[$i])) {
        array_push($bookArr, $bookmcount[$i]);
      } else {
        array_push($bookArr, 0);
      }
    }
    return response()->json($bookArr);
  }

  public function deleteBook($book_id)
  {
    $book = Booking::where('booking_id', $book_id)->first();
    $book->delete();
    return response()->json($book);
  }

  public function changeStatusBook($book_id, $status)
  {
    $book = Booking::where('booking_id', $book_id)->first();
    $book->status = $status;
    $book->save();
    return response()->json($book);
  }
}
