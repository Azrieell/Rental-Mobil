@extends('layouts.app') @section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="row d-flex justify-content-center" style="margin-top: 100px; margin-bottom: 100px;">
                <div class="col-md-10">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="images p-3">
                                    <div class="text-center p-4"><img id="main-image"
                                            src="https://static.wixstatic.com/media/bce131_98c3617f866a49338eecbd3afa41d588~mv2.png/v1/fill/w_688,h_408,al_c,q_85,enc_auto/bce131_98c3617f866a49338eecbd3afa41d588~mv2.png"
                                            width="300" /></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product p-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <i class="fa fa-shopping-cart text-muted"></i>
                                    </div>
                                    <div class="mt-4 mb-3"><span
                                            class="text-uppercase text-muted brand">{{$mobilid->merk}}</span>
                                        <div class="price d-flex flex-row align-items-center">
                                            <span class="act-price">SPESIFIKASI</span>
                                        </div>
                                        <p>
                                            <span>Tempat Duduk <b style="color: black;">6</b></span><span
                                                style="margin-left: 60px">Transmisi <b
                                                    style="color: black;">Matic</b></span><br>
                                            <span>Bahan Bakar <b style="color: black;">Bensin</b></span>
                                            <span style="margin-left: 60px">Asuransi <b
                                                    style="color: black;">Yes</b></span>
                                        </p>
                                    </div>
                                    <p class="about" style="color: black;"></p>
                                    <p class="about" style="color: #000;">Ingin Menggunakan Unit Ini?
                                        <br>
                                        Hubungi kami sekarang juga untuk mendapatkan informasi lebih lanjut dan detail
                                        ketersediaan kendaraan ini.</p>
                                    @if ($mobilid->status_sewa == 'Tersedia')
                                    <button class="btn btn-sm btn-primary">Tersedia</button>
                                    @else
                                    <button class="btn btn-sm btn-danger">Sedang Disewa</button>
                                    @endif

                                    @if($mobilid->status_sewa == 'Tersedia')
                                    <form action="/sewa/mobil/{{$mobilid->id}}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <br>
                                        <h4>Dari Tanggal :</h4>
                                        <input type="date" name="tanggal_mulai">
                                        <br><br>
                                        <h4>Sampai Tanggal :</h4>
                                        <input type="date" name="tanggal_selesai">
                                        <br><br>
                                        <h4>Total Hari :</h4>
                                        <input type="text" name="lama_sewa">
                                        <button>Sewa Sekarang</button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&family=Rubik:ital,wght@1,600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Roboto:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Roboto&display=swap');

        body {
            background-color: #000
        }

        .card {
            border: none
        }

        .product {
            background-color: white;
        }

        .brand {
            font-size: 13px
        }

        .act-price {
            color: #309df0;
            font-weight: 700
        }

        .dis-price {
            text-decoration: line-through
        }

        .about {
            font-size: 14px
        }

        .color {
            margin-bottom: 10px
        }

        label.radio {
            cursor: pointer
        }

        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none
        }

        label.radio span {
            padding: 2px 9px;
            border: 2px solid #309df0;
            display: inline-block;
            color: #309df0;
            border-radius: 3px;
            text-transform: uppercase
        }

        label.radio input:checked+span {
            border-color: #ff0000;
            background-color: #ff0000;
            color: #fff
        }

        .btn-danger {
            background-color: #309df0 !important;
            border-color: #309df0 !important
        }

        .btn-danger:hover {
            background-color: #309df0 !important;
            border-color: #309df0 !important
        }

        .btn-danger:focus {
            box-shadow: none
        }

        .cart i {
            margin-right: 10px
        }

    </style>@endsection <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js">
        < script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity = "sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin = "anonymous" > < /scr>< scrip type="text/javascript
        "
        src = "js/bootsnav.js" >

    </script>
    <script>
        function change_image(image) {

            var container = document.getElementById("main-image");

            container.src = image.src;
        }



        document.addEventListener("DOMContentLoaded", function (event) {







        });

    </script>
