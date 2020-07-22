@extends('main.main')
@section('content')

        @foreach($cafes as $c)


         <div class="container">

          <div class="row">
            

            <div class="col-lg-8 mx-auto">

              <div class="modal-body">
              <marquee bgcolor="red" >Hubungi nomor telpon kafe jika ingin Reservasi Kafe dan Sewa Barista!</marquee></br>


                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">{{$c->nama}}</h2>
                <p class="item-intro text-muted">Daerah: {{$c->daerah}}</p>
                <img class="img-fluid d-block mx-auto" src="{{url('/data_file/'.$c->gambar)}}">
                <p>Alamat : {{$c->alamat}}</p>
                <ul class="list-inline">
                <li>Id Kafe: {{$c->id}}</li>
                  <li>Waktu buka: {{$c->keterangan}}</li>
                  <li>Kategori: {{$c->kategori}}</li>
                  <li>Nomor Telepon: {{$c->nomor_telpon}}</li>
                </ul>
                <left>
                <a href="/"><button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Tutup</button></a>
                  <a href="/paket"><button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Paket Reservasi Kafe</button></a>
                  <a href="/indexpie"><button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Lihat Popularitas Kafe</button></a>
                </left>
                

              </div>
              
            </div>

             
        </div></div>
<br \>

        @endforeach


