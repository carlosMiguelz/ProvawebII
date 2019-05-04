<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons" >

               
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet" media="screen,projection">
</head>
<body>
    <div class="">
        <nav class="teal">
            <div class="nav-wrapper container">
              <a href="{{route('home')}}" class="brand-logo">SGRE</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                @guest
                  <li>
                    <a href="{{ route('login')}}">Entrar</a>
                  </li>
                @else
                <li>
                  <a href="{{ route('equipamento.index')}}">Equipamentos</a>
                </li>
                <li>
                  <a href="{{ route('reservas.index')}}">Reservas</a>
                </li>
                <li>
                  <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Sair
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
                @endguest
              </ul>
            </div>
          </nav>
    </div>
    <div id="app" class="container">
        @yield('content')
    </div>
    

    @yield('js')
</body>
</html>
