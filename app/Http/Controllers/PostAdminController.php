<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostAdminController extends Controller
{
    public function index() 
    {
    	$cafes = DB::table('cafes')
      ->join('daerahs','cafes.daerah','=','daerahs.id')
                    ->join('kategoris','cafes.kategori','=','kategoris.id')
                    ->select('cafes.*','daerahs.nama_daerah as daerah','kategoris.nama_kategori as kategori')
                    ->get();
        return view('postadmin
        
        ' ,['cafes' => $cafes]); 
    }

        public function post($id)
    {
       $cafe = DB::table('cafes')
       ->join('daerahs','cafes.daerah','=','daerahs.id')
                    ->join('kategoris','cafes.kategori','=','kategoris.id') 
                    ->select('cafes.*','daerahs.nama_daerah as daerah','kategoris.nama_kategori as kategori')
       ->get();



        return view('postadmin',['cafes' => $cafe->where('id',$id)]);


    }


        public function close()
    {

        return view('index');


    }
}