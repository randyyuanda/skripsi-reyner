<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ongoing = Booking::where('users_id', Auth::user()->id)->where('status', '!=', 'Shipment Completed')->count();
        $completed = Booking::where('users_id', Auth::user()->id)->where('status','Waiting')->count();

        return view('/client/dashboard-klien', [
            "title" => "home",
            "ongoing" => $ongoing,
            "completed" => $completed,
        ]);
    }

    public function homeAdmin()
    {
        $listklien = User::where('role', 'klien')->get();
        $counttotalshipment = 0;
        $counttotalwaitingshipment = 0;
        $counttotalcanceledshipment = 0;
        foreach ($listklien as $klien) {
            $counttotalshipment += Booking::where('users_id', $klien->id)->get()->count();
            $counttotalwaitingshipment += Booking::where('users_id', $klien->id)->where('status', 'Waiting')->get()->count();
            $counttotalcanceledshipment +=  Booking::where('users_id', $klien->id)->where('status', 'CANCELED')->get()->count();
        }
        return view('/admin/dashboard-admin', [
            "title" => "dashboard-admin",
            "counttotalshipment" => $counttotalshipment,
            "counttotalwaitingshipment" => $counttotalwaitingshipment,
            "counttotalcanceledshipment" => $counttotalcanceledshipment,
        ]);
    }

    public function listAdmin()
    {
        $listadmin = User::where('role', 'admin')->get();
        return view('/admin/list-admin', [
            "title" => "list-admin",
            "listadmin" => $listadmin,
        ]);
    }

    public function klienAdmin(Request $request)
    {
        $listklien = User::where('role', 'klien')->where('name', 'like', "%".$request->search . "%")->get();
        foreach ($listklien as $klien) {
            $klien->total_shipment = Booking::where('users_id', $klien->id)->whereMonth('created_at', Carbon::now()->month)->whereYear('created_at', Carbon::now()->year)->get()->count();
        }
        return view('/admin/list-klien', [
            "title" => "list-klien",
            "listklien" => $listklien,
        ]);
    }

    public function detailKlienAdmin(Request $request, $id)
    {
        $klien = User::where('role', 'klien')->where('id', $id)->first();
        if ($klien) {
            $listbooking = Booking::where('users_id', $klien->id)->orderBy('created_at', 'desc')->where('status', 'like', "%".$request->search . "%")->paginate(10);
            $counttotalmonthlyshipment = Booking::where('users_id', $klien->id)->whereMonth('created_at', Carbon::now()->month)->whereYear('created_at', Carbon::now()->year)->get()->count();
            $counttotalallshipment = Booking::where('users_id', $klien->id)->get()->count();
            foreach ($listbooking as $book) {
                $book->nama_klien = User::where('id', $book->users_id)->first()->name;
            }
            return view('/admin/detail-klien', [
                "title" => "list-klien",
                "klien" => $klien,
                "listbooking" => $listbooking,
                "counttotalmonthlyshipment" => $counttotalmonthlyshipment,
                "counttotalallshipment" => $counttotalallshipment,
            ]);
        } else {
            return abort(404);
        }
    }

    public function detailBookingAdmin($id)
    {
        $book = Booking::where('booking_id', $id)->first();
        // if ($book->document) {
        // dd($book->document[0]->document_name);
        // }
        return view('/admin/detail-booking-admin', [
            "title" => "list-booking",
            "book" => $book
        ]);
    }

    public function createKlien()
    {
        return view('/admin/create-klien', [
            "title" => "home",
        ]);
    }

    public function updateKlien($klien_id)
    {
        $klien = User::where('id', $klien_id)->first();
        return view('/admin/update-klien', [
            "title" => "home",
            "klien" => $klien
        ]);
    }

    public function updateAdmin($admin_id)
    {
        $admin = User::where('id', $admin_id)->first();
        return view('/admin/update-admin', [
            "title" => "home",
            "admin" => $admin
        ]);
    }

    public function createAdmin()
    {
        return view('/admin/create-admin', [
            "title" => "home",
        ]);
    }

    public function allBook(Request $request)
    {
        $listbooking = Booking::whereHas('user', function ($users) use ($request) {
            $users->where('name', 'like', "%".$request->search . "%")->orwhere('status', 'like', "%".$request->search . "%");
        })->orderBy('created_at', 'desc')->paginate(10);

        foreach ($listbooking as $book) {
            $book->nama_klien = User::where('id', $book->users_id)->first()->name;
        }
        return view('/admin/list-book-klien', [
            "title" => "list-booking",
            "listbooking" => $listbooking,
        ]);
    }

    public function listbooking(Request $request)
    {
        $listbook = Booking::where('users_id', Auth::user()->id)->orderBy('created_at', 'desc')->where('status', 'like', "%".$request->search . "%")->paginate(10);
        foreach ($listbook as $book) {
            $book->nama_klien = User::where('id', $book->users_id)->first()->name;
        }
        return view('/client/list-booking', [
            "title" => "listbooking",
            "listbook" => $listbook,
        ]);
    }

    public function createbooking()
    {
        return view('/client/create-booking', [
            "title" => "listbooking",
        ]);
    }

    public function updateBooking($booking_id)
    {
        $book = Booking::where('booking_id', $booking_id)->where('users_id', Auth::user()->id)->first();
        return view('/client/update-booking', [
            "title" => "listbooking",
            "book" => $book,
        ]);
    }

    public function detailBooking($id)
    {
        $book = Booking::where('booking_id', $id)->first();
        return view('/client/detail-booking', [
            "title" => "listbooking",
            "book" => $book
        ]);
    }

    public function createInvoice($id)
    {
        $book = Booking::where('booking_id', $id)->first();
        return view('/admin/create-invoice', [
            "title" => "list-booking",
            "book" => $book
        ]);
    }

    public function tableInvoice()
    {
        // $listadmin = User::where('role', 'admin')->get();
        return view('/admin/table-invoice', [
            "title" => "list-admin",
            // "listadmin" => $listadmin,
        ]);
    }
}
