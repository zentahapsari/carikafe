<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sewabarista extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "sewabaristas";
    protected $fillable = [
        'cafe', 'nama', 'email', 'nomor_telpon','tanggal','acara','jumlah_orang','keterangan','id_paket','id_user',
    ];
}