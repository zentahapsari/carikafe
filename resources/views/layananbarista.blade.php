<!DOCTYPE html>
<html>
 <head>
  <title>Layanan Sewa Barista</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Tabel Keranjang Sewa Barista</h3><br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
     <div class="col-md-4">Total Pesanan - <b><span id="total_records"></span></b></div>
      <div class="col-md-4">
       <div class="input-group input-daterange">
           <input type="text" name="from_date" id="from_date" readonly class="form-control" />
           <div class="input-group-addon">to</br></div>
           <input type="text"  name="to_date" id="to_date" readonly class="form-control" />
       </div>
       </div>
      <div class="col-md-4">
       <button type="button" name="filter" id="filter" class="btn btn-info btn-sm">Filter</button>
       <button type="button" name="refresh" id="refresh" class="btn btn-warning btn-sm">Refresh</button>
       <a href="{{ url('/postbarista/1') }}" class="btn btn-warning btn-sm" role="button" >Add</a>
       <a href="/sewabarista/export" class="btn btn-primary">Export ke Excel</a>

      </div>
     </div>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
                            <th scope="col">Kafe</th>
                            <th scope="col">Nama pemesan</th>
                            <th scope="col">Email pemesan</th>
                            <th scope="col">No telpon pemesan</th>
                            <th scope="col">Tanggal</th>   
                            <th scope="col">Acara</th>
                            <th scope="col">Paket</th>
                            <th scope="col">Jumlah orang</th>
                            <th scope="col">Waktu sewa(jam)</th>
        </tr>
       </thead>
       <tbody>
       
       </tbody>
      </table><a href="/infokafe">Kembali</a><br/>
      {{ csrf_field() }}
     </div>
    </div>
   </div>
  </div>
 </body>

</html>

<script>
$(document).ready(function(){

 var date = new Date();

 $('.input-daterange').datepicker({
  todayBtn: 'linked',
  format: 'yyyy-mm-dd',
  autoclose: true
 });

 var _token = $('input[name="_token"]').val();

 fetch_data();

 function fetch_data(from_date = '', to_date = '')
 {
  $.ajax({
   url:"{{ route('datebarista.fetch_data') }}",
   method:"POST",
   data:{from_date:from_date, to_date:to_date, _token:_token},
   dataType:"json",
   success:function(data)
   {
    var output = '';
    $('#total_records').text(data.length);
    for(var count = 0; count < data.length; count++)
    {
      output += '<tr>';
     output += '<td>' + data[count].cafe + '</td>';
     output += '<td>' + data[count].nama + '</td>';
     output += '<td>' + data[count].email + '</td>';
     output += '<td>' + data[count].nomor_telpon + '</td>';
     output += '<td>' + data[count].tanggal + '</td>';
     output += '<td>' + data[count].acara + '</td>';
     output += '<td>' + data[count].tempat + '</td>';
     output += '<td>' + data[count].keterangan + '</td>';
     output += '<td>' + data[count].id_user + '</td>';
    }
    $('tbody').html(output);
   }
  })
 }

 $('#filter').click(function(){
  var from_date = $('#from_date').val();
  var to_date = $('#to_date').val();
  if(from_date != '' &&  to_date != '')
  {
   fetch_data(from_date, to_date);
  }
  else
  {
   alert('Both Date is required');
  }
 });

 $('#refresh').click(function(){
  $('#from_date').val('');
  $('#to_date').val('');
  fetch_data();
 });


});
</script>