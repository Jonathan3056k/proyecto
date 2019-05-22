<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset("css/app.css")}}" type="text/css">
    <link rel="stylesheet" href="css/app.css" type="text/css">
    <link rel="stylesheet" href="css/estilos2.css" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>@yield('Principal')</title>
    <style>
        #cabe
        {
            background: #b7d4ff;
        }
        #color
        {
            font-weight: bold;
            color: white;
            text-align : center;
            font-family: Dyuthi;
            font-size : 35pt;
        }
    </style>

</head>

<body background="css/campooo.jpg" >
<header id="cabe">
    <h1 id="color">Prototipo Localizador de ganado</h1>


    <ul class="nav justify-content-end">
        @guest
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('login') }}"><i class="fa fa-user"></i> {{ __('Login') }}</a>
            </li>


            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}"><i class="fa fa-user-edit"></i>{{ __('Registrar') }}</a>
                </li>
            @endif
        @else
        <li class="nav-item"><a href="{{url("animales")}}" class="nav-link text-white"><i class="fa fa-horse"></i> Animales</a></li>
        <li class="nav-item"><a href="{{url("dispositivos")}}" class="nav-link text-white"><i class="fa fa-satellite-dish"></i> Dispositivos</a></li>
        <li class="nav-item"><a href="{{url("tganado")}}" class="nav-link text-white"><i class="fa fa-horse-head"></i> Tipo Ganados</a></li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white " href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

</header>


<div class="slider">
    <ul>
        <li> <img src="css/img1.jpg" alt=""> </li>
        <li> <img src="css/img2.jpg" alt=""> </li>
        <li> <img src="css/img3.jpg" alt=""> </li>
    </ul>

</div>





<main class="container">
    @yield("content")
</main>
<footer id="cabe" class="">
    <div style="color: darkblue" align="center">Elaborado por Alumnos del TESVB de Valle de Bravo </div>
</footer>
</body>
</html>