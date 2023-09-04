@extends('layouts.app') @section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@php
use App\Models\Tb_cars;
$mobil = Tb_cars::all();
@endphp
<div class="container">
    <div class="row row-cols-4" style="margin-top: 80px; margin-left: 50px;">
        @foreach($mobil as $item)
        <div class="our_s
                  olution_category">
            <div class="solution_cards_box">
                <div class="solution_card">
                    <div class="hover_color_bubble"></div>
                    @if ($item->status_sewa == 'Tersedia')
                                <button class="btn btn-sm btn-primary">Tersedia</button>
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
                            <br>Nomor Plat <b style="color: black;">{{$item->nomor_plat}}</b>
                            <br>
                                Harga Sewa Perhari <b
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

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&family=Rubik:ital,wght@1,600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Roboto:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Roboto&display=swap');

    body {
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
        font-family: 'Overpass', sans-serif;
        letter-spacing: 0px;
        font-size: 17px;
        color: #8d8f90;
        font-weight: 400;
        line-height: 32px;
        background-color: #edefef;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #25292a;
        margin: 0px 0px 10px 0px;
        font-family: 'Overpass', sans-serif;
        font-weight: 700;
        letter-spacing: -1px;
        line-height: 1;
    }

    h1 {
        font-size: 34px;
    }

    h2 {
        font-size: 28px;
        line-height: 38px;
    }

    h3 {
        font-size: 22px;
        line-height: 32px;
    }

    h4 {
        font-size: 20px;
    }

    h5 {
        font-size: 17px;
    }

    h6 {
        font-size: 12px;
    }

    p {
        margin: 0 0 20px;
        line-height: 1.7;
    }

    p:last-child {
        margin: 0px;
    }

    ul,
    ol {}

    a {
        text-decoration: none;
        color: #8d8f90;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }

    a:focus,
    a:hover {
        text-decoration: none;
        color: #f85759;
    }



    .page-header {
        background: url(https://astypalea-rentacar.gr/wp-content/uploads/2014/09/145793-banner.png)no-repeat position: relative;
        background-size: cover;
    }

    .page-caption {
        padding-top: 170px;
        padding-bottom: 174px;
    }

    .page-title {
        font-size: 46px;
        line-height: 1;
        color: #fff;
        font-weight: 600;
        text-align: center;
    }

    .card-section {
        position: relative;
        bottom: 60px;
    }

    .card-block {
        padding: 80px;
    }

    .section-title {
        margin-bottom: 60px;
    }

    .section_our_solution .row {
        align-items: center;
    }

    .our_solution_category {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .our_solution_category .solution_cards_box {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .solution_cards_box .solution_card {
        flex: 0 50%;
        background: #fff;
        box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
            0 5px 15px 0 rgba(37, 44, 97, 0.15);
        border-radius: 15px;
        margin: 8px;
        padding: 10px 15px;
        position: relative;
        z-index: 1;
        overflow: hidden;
        min-height: 265px;
        transition: 0.7s;
    }

    .solution_cards_box .solution_card:hover {
        background: #309df0;
        color: #fff;
        transform: scale(1.1);
        z-index: 9;
    }

    .solution_cards_box .solution_card:hover::before {
        background: rgb(85 108 214 / 10%);
    }

    .solution_cards_box .solution_card:hover .solu_title h3,
    .solution_cards_box .solution_card:hover .solu_description p {
        color: #fff;
    }

    .solution_cards_box .solution_card:before {
        content: "";
        position: absolute;
        background: rgb(85 108 214 / 5%);
        width: 170px;
        height: 400px;
        z-index: -1;
        transform: rotate(42deg);
        right: -56px;
        top: -23px;
        border-radius: 35px;
    }

    .solution_cards_box .solution_card:hover .solu_description button {
        background: #fff !important;
        color: #309df0;
    }

    .solution_card .so_top_icon {}

    .solution_card .solu_title h3 {
        color: #212121;
        font-size: 1.3rem;
        margin-top: 13px;
        margin-bottom: 13px;
    }

    .solution_card .solu_description p {
        font-size: 15px;
        margin-bottom: 15px;
    }

    .solution_card .solu_description button {
        border: 0;
        border-radius: 15px;
        background: linear-gradient(140deg,
                #42c3ca 0%,
                #42c3ca 50%,
                #42c3cac7 75%) !important;
        color: #fff;
        font-weight: 500;
        font-size: 1rem;
        padding: 5px 16px;
    }

    .our_solution_content h1 {
        text-transform: capitalize;
        margin-bottom: 1rem;
        font-size: 2.5rem;
    }

    .our_solution_content p {}

    .hover_color_bubble {
        position: absolute;
        background: rgb(54 81 207 / 15%);
        width: 100rem;
        height: 100rem;
        left: 0;
        right: 0;
        z-index: -1;
        top: 16rem;
        border-radius: 50%;
        transform: rotate(-36deg);
        left: -18rem;
        transition: 0.7s;
    }

    .solution_cards_box .solution_card:hover .hover_color_bubble {
        top: 0rem;
    }

    .solution_cards_box .solution_card .so_top_icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: #fff;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .solution_cards_box .solution_card .so_top_icon img {
        width: 40px;
        height: 50px;
        object-fit: contain;
    }

    /*start media query*/
    @media screen and (min-width: 320px) {
        .sol_card_top_3 {
            position: relative;
            top: 0;
        }

        .our_solution_category {
            width: 100%;
            margin: 0 auto;
        }

        .our_solution_category .solution_cards_box {
            flex: auto;
        }
    }

    @media only screen and (min-width: 768px) {
        .our_solution_category .solution_cards_box {
            flex: 1;
        }
    }

    @media only screen and (min-width: 1024px) {
        .sol_card_top_3 {
            position: relative;
            top: -3rem;
        }

        .our_solution_category {
            width: 50%;
            margin: 0 auto;
        }
    }

</style>@endsection


<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js">
    < script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
    integrity = "sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
    crossorigin = "anonymous" >
        <
        scrip type = "text/javascript"
    src = "js/bootsnav.js" >

</script>
