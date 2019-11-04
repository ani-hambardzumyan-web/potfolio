<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script><!-- Styles -->
    <link href="{{ asset('app.scss') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body> <div id="app">


    <main class="py-4">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </main>
</div>
</body>
<script>
    $('#calc').click( function(){
        const vehicle = $('#vehicle').val();
        const isWithinMetro = $('#within_metro_manila').val();
        const no_of_days = parseInt($('#no_of_days').val());
        const city1 = $('#city').val();
        const city2 = $('#city2').val();
        const pt = parseInt($('#time').val());
        const dt = parseInt($('#time2').val());
        const province = $('#province').val();
        let price = 0;
        const provincePrice = {
                    Antipolo:4500,
                    Bacoor:4500,
                    Batangas:4500,
                    Binan:4500,
                    Cabuyao:4500,
                    Calamba:5000,
                    Cavita:4000,
                    Dasmarinas:3000,
                'General Trias':3000,
        Imus:3500,
        Lipa:4500,
        Lucena:4500,
                'San Pablo':5000,
                'San Pedro':4500,
                'Santa Rosa':4500,
                'Sto tomas':4500,
        Tagaytay:5000,
        Tanauan:4500,
                'Trece Martires':4500,
        Candelaria:7000,
                    Tiaong:7000,
                    Lucena:8000,
                    Lucena:8000,
                    Lopez:8000,
                    Bulacan:5000,
                    Meycuayan:3500,
                    Malolos:3500,
                    Gulacan:5000,
                'San Rafael':5000,
                'San Idelfonso':5000,
                'San Miguel':5000,
                'Nueva Ecija':6000,
                'Nueva Viscaya':7000,
                    Isabela:8000,
                'San Femando':4800,
                    Porac:4800,
                    Dinalupihan:4800,
                    Angeles:5500,
                    Clark:5500,
                    Dau:5500,
                    Tarlac:7000,
                    Pangasinan:8000
        };
        if(isWithinMetro === "Yes"){
            price = 4000*no_of_days;
            if(vehicle === "VAN"){
                price = 8000*no_of_days;
            }
            if(city1 === "AIRPORT" || city2 === "AIRPORT"){
                price = (dt-pt)*600*no_of_days;
            }
        }else{
            price = no_of_days*provincePrice[province]
        }
        $('#price').text(price);

        $('#priceValue').val(price);
    });
    $( document ).ready(function() {

    });
</script>
</html>