<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\cafe;
use Auth;

class CafeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $cafe = DB::table('cafes')->paginate(10);
        $cafe = DB::table('cafes')
                    ->join('daerahs','cafes.daerah','=','daerahs.id')
                    ->join('kategoris','cafes.kategori','=','kategoris.id')
                    ->select('cafes.*','daerahs.nama_daerah as daerah','kategoris.nama_kategori as kategori')
                    ->get();

        //$cafe =  cafe::all();
        // print_r($cafe);
        // die;            
        return view('adminWeb',['cafes' => $cafe]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //untuk tambah ke database
        $this->validate($request,['gambar'=>'required|file|image']);

        $file = $request->file('gambar');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';

        $file->move($tujuan_upload,$nama_file);

        $cafe = DB::table('cafes')->get();

        DB::table('cafes')->insert([
            'id' => $request->id+1,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'daerah' => $request->daerah,
            'nomor_telpon' => $request->nomor_telpon,
            'kategori' => $request->kategori,
            'barista' => $request->barista,
            'keterangan' => $request->keterangan,
            'gambar' => $nama_file
        ]);
        return redirect('/index/eyJpdiI6IkJsSEdsKzVrNG1Qb05nZU9LZ1FRSXc9PSIsInZhbHVlIjoiXC9mQVpWZkJmVGhMMnlaN0NPZmFEM2c9PSIsIm1hYyI6ImI5OWE0OTZiODI0M2QwMDJiYWFiOTdiZTRlZGEyMWM5MzhmNWNhNjY2OThiMzZjZGU1ODA2ZDllODc2YjEzMWYifQ==');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cafe = DB::table('cafes')->where('id',$id)->get();
        return view('edit',['cafes' => $cafe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function update(Request $request)
    {
        //
        
       
         DB::table('cafes')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'daerah' => $request->daerah,
            'nomor_telpon' => $request->nomor_telpon,
            'kategori' => $request->kategori,
            'barista' => $request->barista,
            'keterangan' => $request->keterangan
        ]);
        return redirect('/infokafe');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function hapus($id)
    {
        DB::table('cafes')->where('id',$id)->delete();
	    return redirect('/index/eyJpdiI6IkJsSEdsKzVrNG1Qb05nZU9LZ1FRSXc9PSIsInZhbHVlIjoiXC9mQVpWZkJmVGhMMnlaN0NPZmFEM2c9PSIsIm1hYyI6ImI5OWE0OTZiODI0M2QwMDJiYWFiOTdiZTRlZGEyMWM5MzhmNWNhNjY2OThiMzZjZGU1ODA2ZDllODc2YjEzMWYifQ==');
    }

    public function tambah()
    {   
        $cafe = DB::table('cafes')->get('nama');
        return view('tambah', ['cafes' => $cafe]);
    }


}
