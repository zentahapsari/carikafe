<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DashboardController extends Controller
{
    public function index()
    {
        $data = DB::table('sewakafes')
        ->select(
         DB::raw('tanggal as tanggal'),
         DB::raw('count(*) as number'))
        ->groupBy('tanggal')
        ->get();
      $array[] = ['tanggal', 'Number'];
      foreach($data as $key => $value)
      {
       $array[++$key] = [$value->tanggal, $value->number];
      }
      return view('dashboards.index')->with('tanggal', json_encode($array));
      
     }
       
}
