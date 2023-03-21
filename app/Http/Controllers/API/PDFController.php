<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Request $request)
    {
        // $data = [
        //     'title' => 'Invoice',
        // 'name' => 'asd',
        // 'bilingTo' => $request->get('bilingTo'),
        // 'date' => $request->get('date'),
        // 'invoiceNo' => $request->get('invoiceNo'),
        // 'term' => $request->get('term'),
        // 'BLNo' => $request->get('BLNo'),
        // 'POD' => $request->get('POD'),
        // 'vessel' => $request->get('vessel'),
        // 'invoiceList' => [],
        // 'sum' => $request->get('sum')
        // ];
        $data = array(
            'name' => 'Invoice', 'date' => '1/29/15', 'title' => 'Invoice',
            'bilingTo' => $request->get('bilingTo') ?? 'bilingTo',
            'date' => $request->get('date')  ?? 'date',
            'invoiceNo' => $request->get('invoiceNo')  ?? 'invoiceNo',
            'term' => $request->get('term') ?? 'term',
            'BLNo' => $request->get('BLNo') ?? 'BLNo',
            'POD' => $request->get('POD') ?? 'POD',
            'vessel' => $request->get('vessel') ?? 'vessel',
            'invoiceList' => [],
            'sum' => $request->get('sum')  ?? 'sum',
        );
        view()->share('data', $data);

        $pdf = PDF::loadView('/admin/table-invoice', $data);
        return $pdf->stream('invoice.pdf');
        // return view('/admin/create-invoice', [
        //     "title" => "list-admin",
        //     // "listadmin" => $listadmin,
        // ]);
    }
}
