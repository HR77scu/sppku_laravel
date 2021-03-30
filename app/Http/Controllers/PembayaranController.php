<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;
use App\User;
use App\Siswa;
use Alert;

class PembayaranController extends Controller
{
    public function index()
    {
        $data = [
            'pembayaran' => Pembayaran::orderBy('id', 'DESC')->paginate(10),
            'user' => User::find(auth()->user()->id)
        ];
      
        return view('backend.pembayaran.index', $data);
    }

    public function store(Request $req)
    {
      
        $message = [
            'required' => ':attribute harus di isi',
            'numeric' => ':attribute harus berupa angka',
            'min' => ':attribute minimal harus :min angka',
            'max' => ':attribute maksimal harus :max angka',
         ];
         
        $req->validate([
            'nisn' => 'required',
            'spp_bulan' => 'required',
            'jumlah_bayar' => 'required|numeric'
         ], $message);
         
         if(Siswa::where('nisn',$req->nisn)->exists() == false):
            Alert::error('Terjadi Kesalahan!', 'Siswa dengan NISN ini Tidak di Temukan');
           return back();
            exit;
         endif;
            
         
         $siswa = Siswa::where('nisn',$req->nisn)->get();
         
         foreach($siswa as $val){
            $id_siswa = $val->id;
            $id_spp = $val->id_spp;
            $nama_siswa = $val->nama;
         }
         // $nisn = $request->get('nisn');
         $rafi = \Auth::user()->id;
         $tgl = date('y-m-d');
         $thn = date('y');
         Pembayaran::create([
            'nisn' => $req->nisn,
            'id_petugas' => $rafi,
            'nama_siswa' => $nama_siswa,
            'id_siswa' => $id_siswa,
            'bulan_bayar' => $req->spp_bulan,
            'tgl_bayar' => $tgl,
            'tahun_bayar' => $thn,
            'jumlah_bayar' => $req->jumlah_bayar,
            'id_spp' => $id_spp,
         ]);
         
         Alert::success('Berhasil!', 'Pembayaran Berhasil di Tambahkan!');
         
         return back();
    }

    public function edit($id)
    {
        $data = [
            'edit' => Pembayaran::find($id),
            'user' => User::find(auth()->user()->id)
         ];
         
         return view('dashboard.entri-pembayaran.edit', $data);
    }

    public function update(Request $req, $id)
    {
         $message = [
            'required' => ':attribute harus di isi',
            'numeric' => ':attribute harus berupa angka',
            'min' => ':attribute minimal harus :min angka',
            'max' => ':attribute maksimal harus :max angka',
         ];
         
        $req->validate([ 
            'nisn' => 'required',
            'spp_bulan' => 'required',
            'jumlah_bayar' => 'required|numeric'
         ], $message);
         
         $pembayaran = Pembayaran::find($id);
         
         $pembayaran->update([
             'spp_bulan' => $req->spp_bulan,
            'jumlah_bayar' => $req->jumlah_bayar
         ]);
         
         if(Siswa::where('nisn',$req->nisn)->exists() == false):
            Alert::error('Terjadi Kesalahan!', 'Siswa dengan NISN ini Tidak di Temukan');
           return back();
            exit;
         endif;

         if($req->nisn != $pembayaran->siswa->nisn) :
            $siswa = Siswa::where('nisn',$req->nisn)->get();
         
            foreach($siswa as $val){
               $id_siswa = $val->id;
            }
            
            $pembayaran->update([
               'id_siswa' => $id_siswa,
            ]);
         endif;
         
         Alert::success('Berhasil!', 'Pembayaran berhasil di Edit');
         return back();
    }

        public function destroy($id)
    {
      //   if(Pembayaran::find($id)->delete()) :
      //       Alert::success('Berhasil!', 'Pembayaran Berhasil di Hapus!');
      //    else :
      //       Alert::success('Terjadi Kesalahan!', 'Pembayaran Gagal di Tambahkan!');
      //    endif;
         
      //    return back();
      $data = Pembayaran::find($id)->delete();
      return redirect()->route('pembayaran.index');
    }
}
