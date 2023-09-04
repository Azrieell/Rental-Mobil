@extends('layouts.app')


@section('content')
@php
    use App\Models\Tb_cars;
$mobil = Tb_cars::all();
@endphp
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row align-items-center">
                    <div class="col-lg-7 py-5" style="margin-top: 100px;">
                        <h1 class="mb-4"></h1>
                        <h2 class="m-0" style="font-family: Arial, Helvetica, sans-serif;">
                            Rental.co adalah website untuk penyewaan Mobil Bandung yang <p>bergerak di bidang penyedia Wisata Dan Lain Lain, dengan bermacam unit mobil.</p>
                        </h2>
                    </div>
                    <div class="col-lg-5" style="margin-top: 100px;">
                        <img src="https://www.toyotasragen.com/wp-content/uploads/2018/02/foto-gambar-toyota-alphard-di-solo-nasmoco-ringroad-warna-white-pearl-600x400.png"
                            width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="card-section">
    <div class="container">
        <div style="margin-top: 100px;">
            <center><a style="color: #309df0; font-size: 27px; font-family: 'Kanit', sans-serif;"><b>TRANSPORTASI
                        MOBIL</b></a></center>
            <center><a style="color: black; font-size: 40px; font-family: 'Kanit', sans-serif;">Yang Kami
                    Sediakan</a></center>
        </div>
        <center>
            <div style="width: 80px; background: #309df0; height: 6px; margin-top: 25px;"></div>
        </center><br>
        <center>
            <h4>Anda dapat memilih berbagai varian mobil penumpang yang selalu terjaga kebersihannya. Kami
                menjamin setiap unit <p>dalam kondisi prima demi kepuasan dan kenyamanan perjalanan Anda</p>
            </h4>
        </center>
    </div>
</div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container">
    <div class="row row-cols-4" style="margin-top: 80px; margin-left: 20px;">
        @foreach($mobil as $item)
        <div class="our_s
                  olution_category">
            <div class="solution_cards_box">
                <div class="solution_card">
                    <div class="hover_color_bubble"></div>
                    @if ($item->status_sewa == 'Tersedia')
                    <button class="btn btn-sm btn-primary" style="border-radius: 15%;">Tersedia</button>
                    @else
                    <button class="btn btn-sm btn-danger">Sedang Disewa</button>
                    @endif
                    <div>
                        <img src="{{$item->gambar()}}" width="280px" height="190px">
                    </div>
                    <div class="solu_title">
                        <center>
                            <h3>{{$item->merk}}</h3>
                        </center>
                    </div>
                    <div class="solu_description">
                        <p>
                            <span> Model
                                <b style="color: black;"> {{$item->model}}
                                </b></span>
                            <br>
                            Nomor Plat <b style="color: black;">{{$item->nomor_plat}}</b>
                            <br>Harga Sewa Perhari <b
                                    style="color: black;">{{$item->harga_sewa_perhari}}</b>

                            @if ($item->status_sewa == "Tersedia")
                            <a href="/mobil/detail/{{$item->id}}">
                                <a href="/mobil/detail/{{$item->id}}" class="btn btn-primary">Sewa Sekarang</a>
                            </a>
                            @else
                            {{-- <a href="/mobil/detail/{{$item->id}}"> --}}
                            <button type="button" class="btn btn-danger btn-block"
                                disabled><small>BOOKING</small></button>
                            {{-- </a> --}}
                            @endif
                            {{-- <span>Tempat Duduk <b style="color: black;">6</b></span><span
                                    style="margin-left: 60px">Transmisi <b style="color: black;">Matic</b></span><br>
                                <span>Bahan Bakar <b style="color: black;">Bensin</b></span><span
                                    style="margin-left: 60px">Asuransi <b style="color: black;">Yes</b></span> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col">
        </div>
    </div>
</div>
</div>
@endsection


<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></scr>
<scrip type="text/javascript" src="js/bootsnav.js"></script>

