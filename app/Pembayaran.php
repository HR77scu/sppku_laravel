<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    protected $fillable = ['id_petugas','nisn','nama_siswa','tgl_bayar','bulan_bayar','tahun_bayar','id_spp','jumlah_bayar'];

    
    public function users()
    {
         return $this->belongsTo(User::class,'id_petugas', 'id');
    }
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id', 'nisn');
    }
}
