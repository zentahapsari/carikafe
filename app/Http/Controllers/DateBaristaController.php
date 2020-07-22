<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\SewaBaristaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Sewabarista;

class DateBaristaController extends Controller
{
    function index()
    {
    
     return view('layananBarista');
    }

    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      if($request->from_date != '' && $request->to_date != '')
      {
       $data = DB::table('sewabaristas')
         ->whereBetween('tanggal', array($request->from_date, $request->to_date))
         ->get();
      }
      else
      {
       $data = DB::table('sewabaristas')->orderBy('tanggal', 'desc')->get();
      }
      echo json_encode($data);
     }
    }
    public function export() 
    {
        return Excel::download(new SewaBaristaExport, 'datasewabarista.xlsx');
    }
    
}
