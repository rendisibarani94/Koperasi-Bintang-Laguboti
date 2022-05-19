@extends('layouts.app')
@section('styles')
    <link href='https://fonts.googleapis.com/css?family=Lexend Exa' rel='stylesheet'>
    <link rel="icon" href="images/logo_new.png">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="logo_new.png">
    <title>About KBL</title>
    <style>
        *{
    padding: 0;
    margin:0 ;
}

.namaWeb{

top: 30px;
font-family: 'Lexend Exa';

font-style: normal;
font-size: 30px;
/* identical to box height */
/* color: #000000;
mix-blend-mode: normal; */
}
a{
display: flex;
font-family: 'Hind Vadodara', sans-serif;
font-style: normal;
font-weight: 600;
font-size: 20px;
margin: 20px;
color: #000000;
text-decoration: none;
} 

li{
list-style: none;
display: inline-block;
}

.images{

width: 320px;
height: 390px;
left: 110px;
top: 359px;
margin-right: 90px;
margin-bottom: 50px;
float: left;
}
.navbar{
 margin:5px;
 position: sticky;
}

.btn{
   background-color: #212121;
   
}
.btn :hover {
 background-color: #e62626;
 color: white;
}
.slideshow-container {
 max-width: 1000px;
 position: relative;
 margin: auto;
}

/* Caption text */
.text {
 color: #f2f2f2;
 font-size: 15px;
 padding: 8px 12px;
 position: absolute;
 bottom: 8px;
 width: 100%;
 text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
 color: #f2f2f2;
 font-size: 12px;
 padding: 8px 12px;
 position: absolute;
 top: 0;
}

/* The dots/bullets/indicators */
.dot {
 height: 15px;
 width: 15px;
 margin: 0 2px;
 background-color: #bbb;
 border-radius: 50%;
 display: inline-block;
 transition: background-color 0.6s ease;
}

.active {
 background-color: #717171;
}

/* Fading animation */
.fade {
 -webkit-animation-name: fade;
 -webkit-animation-duration: 1.5s;
 animation-name: fade;
 animation-duration: 1.5s;
}

@-webkit-keyframes fade {
 from {opacity: .4} 
 to {opacity: 1}
}

@keyframes fade {
 from {opacity: .4} 
 to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
 .text {font-size: 11px}
}
h5{
 font-family: 'Roboto';
font-style: normal;
font-weight: 400;
font-size: 26px;
line-height: 30px; text-align: justify; 
padding: 8px 170px;
}
h2{font-family: 'Roboto';
font-style: normal;
font-weight: 500;
font-size: 32px;
line-height: 38px;}
   </style>
   @endsection
@section('content')
<div class="container">
    <br>
    <center>
    <img src="images/KBL.png" width="695" height="301" class="d-inline-block align-top" alt="">
    </center>
    <h2><b><center>Tentang Kami</center></b></h2>
    <br>
    <h5>Koperasi Bintang Laguboti adalah layanan yang siap membantu Anda dalam melakukan perjalanan jarak jauh. 
        Koperasi bintang laguboti berlokasi dibeberapa daerah diantaranya Sibolga, Laguboti dan Medan. Sebagai salah satu pionir 
        jasa transportasi darat di dataran Sumatera Utara, Koperasi Bintang Laguboti ingin senantiasa mengingkatkan kualitas layanan. 
        Kali ini Pak Koper, CEO KBL ingin mengembangkan sistem yang memungkinkan pelanggannya untuk melakukan pemesanan jasa tranportasi
        via Internet. Seperti yang diketahui, Koperasi Bintang Laguboti merupakan salah satu penyedia jasa transportasi yang dapat 
        diandalkan di daerah kita. Sistem yang akan dikembangkan memungkinkan calon penumpang untuk melakukan pemesanan dan pembayaran
        secara online. Sehingga akan sangat memudahkan pengguna dalam melakukan transaksi. Kami memiliki integritas memberikan 
        layanan terbaik dan memuaskan bagi para pengguna. Kepuasan pengguna adalah prioritas kami.  
        </h5>
        <br><br>
<center>
  <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3><span>Contact Us</span></h3>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 pt-2">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Address</h3>
              <p>Jalan Sitoluama, Kec. Balige, Toba, Sumatera Utara 22381</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="info-box  mb-4">
              <a href=""><i class="bx bx-envelope"></i></a>
              <h3>Email</h3>
              <p>koperasibintang.laguboti.com</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="info-box  mb-4">
              <a href=""><i class="bx bx-phone-call"></i></a>
              <h3>Call</h3>
              <p>082146982417</p>
            </div>
          </div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3673457451055!2d99.14644411469521!3d2.383215198263204!2m3!1f0!2f0!3f0!3m2!
  1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sInstitut%20Teknologi%20Del!5e0!3m2!1sid!2sid!4v1652317775532!5m2!1sid!2sid"
  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </center>
  <center>
         <div>
           <img src="images/KBL.png" width="250" height="100"/>
            <p>
              Sitoluama<br>
              Kec. Balige, Toba, Sumatera Utara 22381<br>
              Indonesia <br><br>
              <strong>Phone:</strong> 082146982417<br>
              <strong>Email:</strong> koperasibintang.laguboti.com<br>
            </p>
          </div>
        </div>
    </center>
</div>
@endsection