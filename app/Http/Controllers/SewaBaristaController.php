<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SewaBaristaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        //
        /* $sewabarista = DB::table('sewabaristas')
                    ->join('cafes','sewabaristas.cafe','=','cafes.id')
                    ->join('users','sewabaristas.id_user','=','users.id')
                    ->select('sewabaristas.*','cafes.nama as cafe','users.email as id_user')
                    ->get();
        return view('sbindex',['sewabaristas' => $sewabarista]); */
        $sewabarista = DB::table('sewabaristas')
                    ->join('cafes','sewabaristas.cafe','=','cafes.id')
                    ->select('sewabaristas.*','cafes.nama as cafe')
                    ->get();
        return view('layananBarista',['sewabaristas' => $sewabarista]);
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
        DB::table('sewabaristas')->insert([
            'cafe' => $request->cafe,
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor_telpon' => $request->nomor_telpon,
            'tanggal' => $request->tanggal,
            'acara' => $request->acara,
            'tempat' => $request->tempat,
            'keterangan' => $request->keterangan,
            'id_user' => $request->id_user
        ]);
        return redirect('/sewabarista');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        DB::table('sewabaristas')->where('id',$id)->delete();
	    return redirect('/sewabarista');
    }

    public function tambah()
    {
        return view('sbtambah');
    }
}
