<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sewakafe extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "sewakafes";
    protected $fillable = [
        'cafe', 'nama', 'email', 'nomor_telpon','tanggal','acara','tempat','keterangan','id_user',
    ];
}