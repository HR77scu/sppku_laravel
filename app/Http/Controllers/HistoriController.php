<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;
use App;
use PDF;

class HistoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['history'] = Pembayaran::all();
        return view('backend.history.index',$data);
    }
    public function index2()
    {
        $data['history'] = Pembayaran::all();
        return view('backend.history.inde2',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['laporan'] = Pembayaran::all();
        return view('backend.laporan.index',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function cetakpdf()
    {
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
     
        $data = [
            'pembayaran' => Pembayaran::orderBy('created_at', 'DESC')->get()
          ];
  
          $pdf = PDF::loadView('pdf.laporan', $data);
          return $pdf->download('Laporan-pembayaran-spp.pdf');
    }
}
