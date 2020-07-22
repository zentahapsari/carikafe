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
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">

<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Edit kafe</div>
                @foreach($cafes as $cf)
                <form action="/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $cf->id}}"><br/>
                    <div class="form-group"></div>
                    <label>Nama Kafe</label>
                    <input type="text" required="required" name="nama" class="form-control" value="{{ $cf->nama}}"  >
                    <div class="form-group"></div>
                    <label>Alamat</label>
                    <input type="text" required="required" name="alamat" class="form-control" value="{{ $cf->alamat}}"  >
                    <div class="form-group"></div>
                    <label>Daerah</label><br>
                    <select name="daerah">
                    <option value="1"> Kota Yogyakarta
                    <option value="2"> Sleman
                    <option value="3"> Bantul
                    <option value="4"> Gunungkidul
                    <option value="5"> Kulon Progo
                    </select> <br/>
                    <div class="form-group"></div>
                    <label>Nomor Telepon</label>
                    <input type="text" required="required" name="nomor_telpon" class="form-control" value="{{ $cf->nomor_telpon}}"  >
                    <div class="form-group"></div>
                    <label>Kategori</label><br>
                    <select name="kategori">
                    <option value="1" selected> Instagenic
                    <option value="2"> 24 Jam
                    <option value="3"> Acara
                    <option value="4"> Wifi kencang
                    <option value="5"> Lainnya
                    </select> <br/>
                    <div class="form-group"></div>
                    <label>Barista</label>
                    <input type="text" required="required" name="barista" class="form-control" value="{{ $cf->barista }}"  >
                    <div class="form-group"></div>
                    <label>Keterangan</label>
                    <input type="text" required="required" name="keterangan" class="form-control" value="{{ $cf->keterangan }}"  >
                    <input type="submit" value="Simpan Data">
                    <a href="/dashboard">Kembali</a><br/>
                </form>
                @endforeach

        </div>
    </div>
</div> </div>

