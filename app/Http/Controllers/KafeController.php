<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KafeController extends Controller
{
    public function index()
    {
    	$cafes = DB::table('cafes')
      ->join('daerahs','cafes.daerah','=','daerahs.id')
                    ->join('kategoris','cafes.kategori','=','kategoris.id')
                    ->select('cafes.*','daerahs.nama_daerah as daerah','kategoris.nama_kategori as kategori')
                    ->get();


    	return view('index' ,['cafes' => $cafes]); 
    }

    public function cari(Request $request)
    { 
       $cari = $request->cari;
       $cafe = DB::table('cafes')
       
       ->where('nama','like','%'.$cari.'%')
       ->get();

        return view('index',['cafes' => $cafe]);


    }

    public function post($id)
    {
       $cafe = DB::table('cafes')
       ->where('id',$id)
       ->get();



        return view('post',['cafes' => $cafe]);


    }

    // public function daerah()
    // {   
    //     $cafe = DB::table('cafes')->get('daerah');
    //     return view('tambah', ['cafes' => $cafe]);
    // }
}
