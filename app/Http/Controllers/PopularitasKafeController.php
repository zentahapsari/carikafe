<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PopularitasKafeController extends Controller
{
    function index()
    {
     $data = DB::table('sewakafes')
       ->select(
        DB::raw('cafe as cafe'),
        DB::raw('count(*) as number'))
       ->groupBy('cafe')
       ->get();
     $array[] = ['cafe', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->cafe, $value->number];
     }
     return view('dashboards.indexpie')->with('cafe', json_encode($array));
    }
}