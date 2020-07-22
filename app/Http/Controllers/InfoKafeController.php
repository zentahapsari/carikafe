<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoKafeController extends Controller
{
    public function index()
    {
    	$cafes = DB::table('cafes')
      ->join('daerahs','cafes.daerah','=','daerahs.id')
                    ->join('kategoris','cafes.kategori','=','kategoris.id')
                    ->select('cafes.*','daerahs.nama_daerah as daerah','kategoris.nama_kategori as kategori')
                    ->where('cafes.id',1)
                    ->get();
    	return view('infokafe' ,['cafes' => $cafes]); 
    } 

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
            'id' => $request->id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'daerah' => $request->daerah,
            'nomor_telpon' => $request->nomor_telpon,
            'kategori' => $request->kategori,
            'barista' => $request->barista,
            'keterangan' => $request->keterangan,
            'gambar' => $nama_file
        ]);
        return redirect('/dashboardd');
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
        return view('editInfoKafe',['cafes' => $cafe]);
    }

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
        return redirect('/dashboardd');
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
	    return redirect('/dashboardd');
    }

    public function tambah()
    {   
        $cafe = DB::table('cafes')->get('nama');
        return view('tambah', ['cafes' => $cafe]);
    }


}