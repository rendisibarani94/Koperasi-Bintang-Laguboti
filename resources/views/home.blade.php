@extends('layouts.app')
@section('styles')
@endsection
@section('content')
<div class="jumbotron">
    <div class="numbertext"></div>
    <img src="images/example1.png" style="width:80%; display: block; margin: auto;">
</div>
<br>
<div class="jumbotron" style="padding-top: 30 px;">
    <div class="container" style="padding-top: 20px;">
  <h1 class="text-center" id="About">"Travelling-it leaves you</h1>
  <h1 class="text-center" id="About">speechless, then turns you into a</h1>
  <h1 class="text-center" id="About">storyteller"</h1>
  <h5 class="text-center" id="About">Ibn Battuta</h5>
<div class="row">
</div><br><br>
<center>
<div class="container2">
<form action="{{ url('tiket') }}" method="post">
  @csrf
    <h2 class="title">Buat Tiket</h2>
      <center><hr style="height:1px; width:90%; border-width:10%;background-color:#212121; opacity :1;"></center>
        <div class="user-details">
          <div class="input-box">
            <h5>Kota asal</h5>
            <select name="asal" class="form-control" required style="width: 400px;">
              <option value="Laguboti">Laguboti</option>
              <option value="Medan">Medan</option>
              <option value="Sibolga">Sibolga</option>
            </select>
            <i id="icon2" class="fa-solid fa-location-dot fa-2x"></i>
          </div>
          <div class="input-box">
            <h5>Jadwal Keberangkatan</h5>
            <input type="datetime-local" name="jadwal" required placeholder="Pilih Jadwal Keberangkatan" style="width: 400px;">
            <i id="icon" class="fa-solid fa-border-all fa-2x"></i>
          </div>
          <div class="input-box">
            <h5>Kota Tujuan</h5>
            <select name="tujuan" class="form-control" required style="width: 400px;">
              <option value="Laguboti">Laguboti</option>
              <option value="Medan">Medan</option>
              <option value="Sibolga">Sibolga</option>
            </select>
            <i id="icon2" class="fa-solid fa-location-dot fa-2x"></i>
          </div>
          <div class="input-box">
            <h5>Tipe Mobil</h5>
            <select name="jenismobil" class="form-control" required style="width: 400px;">
              <option value="Mitsubishi L-300">Mitsubishi L-300</option>
              <option value="Mini Van Toyota">Mini Van Toyota</option>
              <option value="Mercedez Benz Sprinter">Mercedez Benz Sprinter</option>
            </select>
            <i id="icon2" class="fa-solid fa-border-all fa-2x"></i>
          </div>
          <div class="input-box">
            <h5>Nomor Bangku</h5>
            <select name="bangku" class="form-control" required style="width: 400px;">
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
            </select>
            <i id="icon2" class="fa-solid fa-border-all fa-2x"></i>
          </div>
          <div class="input-box">
            <h5>Kontak</h5>
            <select name="kontak" class="form-control" style="width: 400px;">
              <option value="082166368282">Supir Laguboti-Medan</option>
              <option value="081244339909">Supir Laguboti-Sibolga</option>
            </select>
            <i id="icon2" class="fa-solid fa-border-all fa-2x"></i>
          </div>
       </div>
      <button id="pencet" type="submit">Pesan</button>
</form>	
</div>				 
</center>

<div class="container3">
<img src="images/diskon.png" alt="diskon">
<h3 >Berhemat dengan Bintang Laguboti</h3>
<p >Nikmati diskon sebesar 50% untuk 2 pembelian tiket berikutnya setelah membeli 5 tiket</p>
</div>


<center>
<h3 id="tipe-mobil">Tipe Mobil</h3>
  <div class="container-fluid py-5" id="fluid">
      <div class="container">
          <div class="row">
              <div class="col-md-3 col-lg-4">
                  <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="images/l300.png" alt="Card image cap" style="padding: 4px;">
                      <div class="card-body">
                          <h4 class="card-title">Mitsubishi L-300</h4>
          <hr style="height:2px;border-width:0;background-color:#212121; opacity :1;">
                      </div>
                    </div>
              </div>
          
              <div class="col-md-3 col-lg-4">
                  <div class="card" style="width: 18rem; background-color: #B2B0FF">
                      <img class="card-img-top" src="images/hiace.png" alt="Card image cap" style="padding: 4px;">
                      <div class="card-body">
                          <h4 class="card-title">Mini Van <span>Toyota Hiace</span></h4>
          <hr style="height:2px;border-width:0;background-color:#212121; opacity :1;">
                      </div>
                    </div>
              </div>
      
              <div class="col-md-3 col-lg-4">
                  <div class="card" style="width: 18rem;  background-color: #0B094B" >
                      <img class="card-img-top" src="images/sprinter.png" alt="Card image cap" style="padding: 4px;">
                      <div class="card-body">
                          <h4 class="card-title3">Mercedes Benz Sprinter</h4>
          <hr style="height:2px;border-width:0;background-color:#fff; opacity :1;">
                      </div>
                    </div>
              </div>
          </div>
      </div>
  </div>
</center>   
      
<center>
<div class="container-fluid py-5">
<div class="container">
  <div class="row">
    <div class="col-md-5 col-lg-8">
      <div class="card" style="width: 41rem;">
        <div class="card-body">
          <img class="img1" src="images/images.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-2 col-lg-2">
      <div class="card" style="width: 20rem;">
        <div class="card-body">
          <h4 class="card-title5">“Stop worrying about the potholes in the road and enjoy the journey”</h4>
          <h5 id="card-title5">Babs Hoffman</h5>
        </div>
       </div>
      </div>
    </div>
  </div>
</div>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/hiace.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/l300.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/sprinter.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script src="css/bootstrap44/jquery.js/jquery.js"></script>
<script src="css/bootstrap44/jquery.js/popper.js"></script>
<script src="css/bootstrap44/js/bootstrap.js"></script>


<center>
<h3 id="supir">Supir</h3>
<div class="container-fluid py-5" id="fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/l300.png" alt="Card image cap" style="padding: 4px;">
          <div class="card-body">
            <h4 class="card-title">Mitsubishi L-300</h4>
            <hr style="height:2px;border-width:0;background-color:#212121; opacity :1;">
          </div>
          </div>
      </div>
    
      <div class="col-md-3 col-lg-4">
        <div class="card" style="width: 18rem; background-color: #B2B0FF">
          <img class="card-img-top" src="images/hiace.png" alt="Card image cap" style="padding: 4px;">
          <div class="card-body">
            <h4 class="card-title">Mini Van <span>Toyota Hiace</span></h4>
            <hr style="height:2px;border-width:0;background-color:#212121; opacity :1;">
          </div>
          </div>
      </div>
  
      <div class="col-md-3 col-lg-4">
        <div class="card" style="width: 18rem;  background-color: #0B094B" >
          <img class="card-img-top" src="images/sprinter.png" alt="Card image cap" style="padding: 4px;">
          <div class="card-body">
            <h4 class="card-title3">Mercedes Benz Sprinter</h4>
            <hr style="height:2px;border-width:0;background-color:#fff; opacity :1;">
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
</center>
@endsection
