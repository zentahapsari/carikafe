<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\SewakafeExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Sewakafe;

class DateRangeController extends Controller
{
    function index()
    { 
    
     return view('layanankafe');
    } 

    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      if($request->from_date != '' && $request->to_date != '')
      {
       $data = DB::table('sewakafes')
         ->whereBetween('tanggal', array($request->from_date, $request->to_date))
         ->get();
      }
      else
      {
       $data = DB::table('sewakafes')->orderBy('tanggal', 'desc')->get();
      }
      echo json_encode($data);
     }
    }
    public function export() 
    {
        return Excel::download(new SewakafeExport, 'datasewakafe.xlsx');
    }
   
    
}

?>
