<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    protected $table = 'spp';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function user()
    {
        //   return $this->belongsTo(User::class);
        return $this->belongsTo('App\User');
    }
}
