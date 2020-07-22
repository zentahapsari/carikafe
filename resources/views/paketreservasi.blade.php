<head>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <style type="text/css">
   .box{
    width:800px;
    margin:0 auto;
   }
  </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700">

<style>
div.a {
  text-align: center;
}

div.b {
  text-align: left;
}

div.c {
  text-align: right;
}

div.c {
  text-align: justify;
}
.pricingdiv{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  font-family: 'Source Sans Pro', Arial, sans-serif;
}

.pricingdiv ul.theplan{
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  border-top-left-radius: 50px;
  border-bottom-right-radius: 50px;
  color: white;
  background: #7c3ac9;
  position: relative;
  width: 250px; /* width of each table */
  margin-right: 10px; /* spacing between tables */
  margin-bottom: 1em;
  transition: all .5s;
}

.pricingdiv ul.theplan:hover{ /* when mouse hover over pricing table */
  transform: scale(1.05);
  transition: all .5s;
  z-index: 100;
  box-shadow: 0 0 10px gray;
}

.pricingdiv ul.theplan li{
  margin: 10px 20px;
  position: relative;
}

.pricingdiv ul.theplan li.title{
  font-size: 150%;
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
  text-transform: uppercase;
  border-bottom: 5px solid white;
}

.pricingdiv ul.theplan:nth-of-type(2){
  background: #e53499;
}
    
.pricingdiv ul.theplan:nth-of-type(3){
  background: #2a2cc8;
}

.pricingdiv ul.theplan:last-of-type{ /* remove right margin in very last table */
  margin-right: 0;
}

/*very last LI within each pricing UL */
.pricingdiv ul.theplan li:last-of-type{
  text-align: center;
  margin-top: auto; /*align last LI (price botton li) to the very bottom of UL */
}  

.pricingdiv a.pricebutton{
  background: white;
  text-decoration: none;
  padding: 10px;
  display: inline-block;
  margin: 10px auto;
  border-radius: 5px;
  color: navy;
  text-transform: uppercase;
}

@media only screen and (max-width: 500px) {
  .pricingdiv ul.theplan{
    border-radius: 0;
    width: 100%;
    margin-right: 0;
  }
  
  .pricingdiv ul.theplan:hover{
    transform: none;
    box-shadow: none;
  }
  
  .pricingdiv a.pricebutton{
    display: block;
  }
}
</style>
</head>

<div class="container"style="text-align div.a">
<h2>Paket Reservasi</h2>
</div>
<div class="pricingdiv">

	<ul class="theplan">
		<li class="title"><b>Paket 1</b></li>
		<li><b>Harga:</b> RP500.000</li>
        <li><b>Porsi:</b> 12 Orang</li>
		<li><b>Jenis:</b> Lesehan</li>
		<li><b>Ruang:</b> Outdor</li>
		<li><b>Makanan:</b> Prasmanan bisa di request</li>
        <li><b>Fasilitas:</b> Speaker</li>
	</ul>
	<ul class="theplan">
		<li class="title"><span class="icon-trophy" style="color:yellow"></span> <b>Paket 2</b></li>
		<li><b>Harga:</b> RP7500.000</li>
        <li><b>Porsi:</b> 16 Orang</li>
		<li><b>Jenis:</b> Lesehan</li>
		<li><b>Ruang:</b>outdor</li>
		<li><b>Makanan:</b> Prasmanan bisa di request</li>
        <li><b>Fasilitas:</b>Panggung,Speaker</li>
		</ul>
	<ul class="theplan">
		<li class="title"><b>Paket 3</b></li>
		<li><b>Harga:</b> RP1000.000</li>
        <li><b>Porsi:</b> 25 Orang</li>
		<li><b>Jenis:</b> Meja-Kursi</li>
		<li><b>Ruang:</b> Indor</li>
		<li><b>Makanan:</b> Prasmanan bisa di request</li>
        <li><b>Fasilitas:</b>Panggung,Speaker,AC</li>
	</ul>
</div>
<div class="container"style="text-align div.a">
                <a href="/post/1"><button class="btn btn-primary" data-dismiss="modal" type="button" align="center"> 
                  <i class="fas fa-times" ></i>
                  Kembali</button></a>
        </div>
