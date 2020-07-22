@extends('layouts.layout')

@section('content')

@foreach($cafes as $c)


<div class="container">
 <div class="row">
   

   <div class="col-lg-8 mx-auto">

     <div class="modal-body">
        

       <!-- Project Details Go Here -->
       <h2 class="text-uppercase">{{$c->nama}}</h2>
       <img class="img-fluid d-block mx-auto" src="{{url('/data_file/'.$c->gambar)}}">
       <ul class="list-inline">
        <li>Daerah: {{$c->daerah}}</li>
        <li>Alamat : {{$c->alamat}}</li>
        <li>Nomor Telepon: {{$c->nomor_telpon}}</li>
        <li>Waktu buka: {{$c->keterangan}}</li>
        <li>Kategori: {{$c->kategori}}</li>
        <li>Barista: {{$c->barista}}</li>
       </ul>
       
       <left>
       
         <a href="/edit/{{ $c->id }}" ><button class="btn btn-primary" data-dismiss="modal" type="button">
         edit</button></a>
       </left>
       

     </div>


   </div>

    
</div></div>
@endforeach
                

@endsection

