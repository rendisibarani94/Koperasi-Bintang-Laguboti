@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="css/tiket.css"> 

@endsection

@section('content')

    <div class="container">
        <center>
            <h2 class="mssg mb-5">{{ session('mssg') }}</h2>
        </center>
                <div class="tiket">
                    {{-- @foreach($datas as $data) --}}
                    <div class="row">
                        <div class="col-md-10">
                     <h1>Tiket Penumpang</h1>
                    </div>
                    <div class="col-md-2">
                        {{-- <h4>Nomor Tiket: {{  }}</h4> --}}
                    </div>
                    </div>
                        <hr>
                        <br><br>
                    <table class="table" >
                        <tr>
                            <td>
                                <h5>Kota Asal</h5><br>
                                <div class="fieldTiket">
                                    <center><h5>{{ $asal }}</h5></center>
                                </div>
                            </td>
                            <td>
                                <h5>Kontak Supir</h5><br>
                                <div class="fieldTiket">
                                    <center><h5>
                                        @if($asal == 'Laguboti' && $tujuan == 'Medan')
                                       Bapak Rojan : 082166368282
                                    
                                    @elseif($asal == 'Medan' && $tujuan == 'Laguboti')
                                       Bapak Rojan : 082166368282
                                    
                                    @else
                                      Bapak Paragat : 081244339909
                                    
                                    @endif</h5></center>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Kota Tujuan</h5><br>
                                <div class="fieldTiket">
                                    <center><h5>{{ $tujuan }}</h5></center>
                                </div>
                            </td>
                            <td>
                                <h5>Nomor Bangku</h5><br>
                                <div class="fieldTiket">
                                    <center><h5>{{ $bangku }}</h5></center>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Jadwal keberangkatan</h5><br>
                                <div class="fieldTiket">
                                    <center><h5>{{ $jadwal }}</h5></center>
                                </div>
                            </td>
                            <td>
                                <h5>Tipe Mobil</h5><br>
                                <div class="fieldTiket">
                                    <center><h5>{{ $jenismobil }}</h5></center>
                                </div>
                            </td>
                        </tr>
                    </table>
            </div><br><br>         
                {{-- @endforeach  --}}
        
                <div class="upload">
                        <h2>Upload Bukti Transfer</h2>
                        <p style="font-size:20px;">Kirim bukti pembayaran (Transfer) kamu disini!</p>
                        <p style="font-size:20px;">Pastikan kamu membayar sesuai dengan harga yang ditentukan!</p><br><br><br>
                        <form action="" method="post">
                            @csrf
                            <div class="container">
                            <div class="input-group mb-5">
                                <label class="input-group-text" for="inputGroupFile01" style="color: white; background-color:#0B094B" >Upload</label>
                                <input type="file" class="form-control" id="inputGroupFile01">
                              </div>
                              <button type="submit">Kirim</button>
                            </div>
                        </form>
                </div>

    </div>
    <script>
        alert("Pastikan Menyimpan Screenshot Tiket anda pada Halaman ini Setelah selesai membayar!");
    </script>
@endsection