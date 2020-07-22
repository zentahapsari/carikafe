<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Carikafe') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
<div class="container">
    
    <div class="row">
        <div class="col-md-12 offset-md-0>
            <div class="card">
                <div class="card-header">Database Kafe</div>

                <!-- <div class="card-body">
                </div> -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Daerah</th>
                            <th scope="col">No telpon</th>
                            <th scope="col">Kategori</th>   
                            <th scope="col">Barista</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    </tbody>
                        @foreach($cafes as $cf)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td> {{$cf->nama}} </td>
                            <td> {{$cf->alamat}} </td>
                            <td> {{$cf->daerah}} </td>
                            <td> {{$cf->nomor_telpon}} </td>
                            <td> {{$cf->kategori}} </td>
                            <td> {{$cf->barista}} </td>
                            <td> {{$cf->keterangan}} </td>
                            <td> <img class="img-fluid" src="{{url('/data_file/'.$cf->gambar)}}"> </td>
                            <!-- <td>
                                <a href="/edit/{{ $cf->id }}" class="badge badge-success">edit</a>
                            </td> -->
                            <td>
                                <a href="/delete/{{ $cf->id }}" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                </table>
                <br/>
                <button type="button" class="btn btn-info"><a href="/tambah">Tambah data</a><br/></button>
                
                <br/><br/>
            </div>
            
        </div>
    </div>
</div>
