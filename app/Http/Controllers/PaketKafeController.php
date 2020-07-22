<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PaketKafeController extends Controller
{
    function index()
    {
     $data = DB::table('sewakafes')
       ->select(
        DB::raw('id_paket as id_paket'),
        DB::raw('count(*) as number'))
       ->groupBy('id_paket')
       ->get();
     $array[] = ['id_paket', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->id_paket, $value->number];
     }
     return view('dashboards.indexpaket')->with('id_paket', json_encode($array));
    }
}