<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function spp()
    {
         return $this->belongsTo(Spp::class,'id_spp','id');
     //     return $this->belongsTo('App\Spp');
    }
   
   public function pembayaran(){
        return  $this->hasMany(Pembayaran::class,'id_spp');
   }
   
    public function kelas(){
        return  $this->belongsTo(Kelas::class,'id_kelas');
   }
}
