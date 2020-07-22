<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    protected $fillable = ['cafe', 'nama', 'email', 'nomor_telpon','tanggal','acara','jumlah_orang','keterangan','id_paket','id_user'];
}



