<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PDO;

class DocumentController extends Controller
{
    public function uploadDocument(Request $request, $booking, $document)
    {
        if ($document == 'DO') {
            return $this->upload($request, $booking, 'Delivery Order');
        } else if ($document == 'IPL') {
            return $this->upload($request, $booking, 'Invoice Packing List');
        } else if ($document == 'PEB') {
            return $this->upload($request, $booking, 'Pemberitahuan Ekspor Barang');
        } else if ($document == 'BL') {
            return $this->upload($request, $booking, 'Bill Of Lading');
        } else if ($document == 'COO') {
            return $this->upload($request, $booking, 'Certificate Of Origin');
        } else {
            return response()->json(['error' => 'Error Upload Document'], 500);
        }
    }

    public function upload(Request $request, $booking, $document)
    {
        $request->validate([
            'document' => 'required',
        ]);
        if ($request->hasFile('document')) {

            $name = $request->file('document')->getClientOriginalName();

            $path = $request->file('document')->store('public/document');

            $item = Document::create([
                'document_name' => $document,
                'directory' => $path,
                'booking_id' => $booking
            ]);
            $book = Booking::where('booking_id', $booking)->first();
            $book->status = $document . ' Received';
            $book->save();
            return response()->json('Success upload Document');
        } else {
            return response()->json(['error' => 'Error Upload Document'], 500);
        }
    }
}
