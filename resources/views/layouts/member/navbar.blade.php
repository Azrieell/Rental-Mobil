<header class="main-header">
    <nav class="navbar navbar-expand-lg main-nav px-0 border-black bg-white pl-4 pr-2">
        <a class="navbar-brand" href="/mojo">
            <h2 style="margin-left: 60px;">Rental.co</h2>
        </a>
        <div class="collapse navbar-collapse" id="mainMenu" style="padding-right: 340px;">
            <ul class="navbar-nav ml-auto text-uppercase f1">
                <li>
                    <a href="/" class="{{ Request::is('/') ? 'active active-first' : '' }}">BERANDA</a>
                </li>
                <li>
                    <a href="/tentang" class="{{ Request::is('tentang') ? 'active active-first' : '' }}">TENTANG
                        KAMI</a>
                </li>
                <li>
                    <a href="/pilihan-mobil" class="{{ Request::is('jenis') ? 'active active-first' : '' }}">PILIHAN
                        MOBIL</a>
                </li>
                <li>
                    <a href="/hubungi-kami" class="{{ Request::is('kontak') ? 'active active-first' : '' }}">HUBUNGI
                        KAMI </a>
                </li>
            </ul>
        </div>
        <span style="padding-right: 50px">
            @guest
            @if (Route::has('login'))
            <a href="/login" style="padding-right: 30px;">Login</a>
            @endif

            @if (Route::has('register'))
            <a href="/register">Register</a>
            @endif
            @else
            <div class="dropdown">
                <a href="" class=" dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">

                        <li>
                            <a class="dropdown-item" href="#">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/mobil_yang_disewa">Mobil Yang di sewa</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
            </div>
            @endguest
        </span>
    </nav>
</header>





<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
</script>
<script type="text/javascript" src="js/bootsnav.js"></script>
