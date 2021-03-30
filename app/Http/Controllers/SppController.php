<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spp;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['spp'] = Spp::all();
        return view('backend.spp.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.spp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Spp;
        $data->tahun = $request->get('tahun');
        $data->nominal = $request->get('nominal');
        $data->save();
        return redirect()->route('spp.index')->with('status','Data Berhasil di tambah');
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
        $data['spp'] = Spp::find($id);
        return view('backend.spp.edit',$data);
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
        $data = Spp::find($id);
        $data->tahun = $request->get('tahun');
        $data->nominal = $request->get('nominal');
        $data->save();
        return redirect()->route('spp.index')->with('status','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Spp::find($id)->delete();
        return redirect()->route('spp.index')->with('status','Data berhasil di hapus');
    }
}
