<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&family=Rubik:ital,wght@1,600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Roboto:wght@300&display=swap');
    
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
    
    </style>
</head>

<body>

        @include('layouts.member.navbar')
        @yield('content')
    <div>
        @include('layouts.member.footer')
    </div>
</body>

</html>
<style>
    /**
   * index.scss
   * - Add any styles you want here!
   */

    body {
        background: white !important;
    }

    /* main-header start */
    [data-target="#mainMenu"] {
        position: relative;
        z-index: 999;
    }

    #mainMenu li>a {
        font-size: 12px;
        letter-spacing: 1px;
        color: black;
        font-weight: 400;
        position: relative;
        z-index: 1;
        text-decoration: none;
    }

    .main-header.fixed-nav #mainMenu li>a {
        color: black;
        text-decoration: none;
    }

    #mainMenu li:not(:last-of-type) {
        margin-right: 30px;
    }

    #mainMenu li>a::before {
        position: absolute;
        content: "";
        width: calc(100% - 1px);
        height: 1px;
        background: black;
        bottom: -6px;
        left: 0;

        -webkit-transform: scale(0, 1);
        -ms-transform: scale(0, 1);
        transform: scale(0, 1);
        -webkit-transform-origin: right center;
        -ms-transform-origin: right center;
        transform-origin: right center;
        z-index: -1;

        -webkit-transition: transform 0.5s ease;
        transition: transform 0.5s ease;
    }

    #mainMenu li>a:hover::before,
    #mainMenu li>a.active::before {
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        transform: scale(1, 1);
        -webkit-transform-origin: left center;
        -ms-transform-origin: left center;
        transform-origin: left center;
    }

    .main-header.fixed-nav #mainMenu li>a::before {
        background: #000;
    }

    .main-header {
        position: fixed;
        top: 0px;
        left: 0;
        z-index: 99;
        width: 100%;
        -webkit-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }

    .main-header.fixed-nav {
        top: 0;
        background: black;
        -webkit-box-shadow: 0 8px 12px -8px rgba(0, 0, 0, 0.09);
        box-shadow: 0 8px 12px -8px rgba(0, 0, 0, 0.09);
        -webkit-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }

    .main-header.fixed-nav .navbar-brand>img:last-of-type {
        display: block;
    }

    .main-header.fixed-nav .navbar-brand>img:first-of-type {
        display: none;
    }

    .navbar-brand {
        color: black;
    }

    .main-header .navbar-brand img {
        max-width: 40px;
        animation: fadeInLeft 0.4s both 0.4s;
    }

    /* main-header end */
    @media (max-width: 991px) {

        /*header starts*/
        .collapse.in {
            display: block !important;
            padding: 0;
            clear: both;
        }

        .navbar-toggler {
            margin: 0;
            padding: 0;
            width: 40px;
            height: 40px;
            position: absolute;
            top: 25px;
            right: 0;
            border: none;
            border-radius: 0;
            outline: none !important;
        }

        .main-header .navbar {
            float: none;
            width: 100%;
            padding-left: 0;
            padding-right: 0;
            text-align: center;
        }

        .main-header .navbar-nav {
            margin-top: 0px;
        }

        .main-header .navbar-nav li .nav-link {
            text-align: center;
            padding: 20px 15px;
            border-radius: 0px;
        }

        /**/
        .main-header .navbar-toggler .icon-bar {
            background-color: #000;
            margin: 0 auto 6px;
            border-radius: 0;
            width: 30px;
            height: 3px;
            position: absolute;
            right: 0;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        .main-header .navbar .navbar-toggler .icon-bar:first-child {
            margin-top: 3px;
        }

        .main-header .navbar-toggler .icon-bar-1 {
            width: 10px;
            top: 0px;
        }

        .main-header .navbar-toggler .icon-bar-2 {
            width: 16px;
            top: 12px;
        }

        .main-header .navbar-toggler .icon-bar-3 {
            width: 20px;
            top: 21px;
        }

        .main-header .current .icon-bar {
            margin-bottom: 5px;
            border-radius: 0;
            display: block;
        }

        .main-header .current .icon-bar-1 {
            width: 18px;
        }

        .main-header .current .icon-bar-2 {
            width: 30px;
        }

        .main-header .current .icon-bar-3 {
            width: 10px;
        }

        .main-header .navbar-toggler:hover .icon-bar {
            background-color: #000;
        }

        .main-header .navbar-toggler:focus .icon-bar {
            background-color: black;
        }

        /*header ends*/
    }

</style>
