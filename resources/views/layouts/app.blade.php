<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 
      
      <script>
         $(document).ready(function() {
            $('select').material_select();
         });
      </script>

    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div class="">
        <nav class="teal">
            <div class="nav-wrapper container">
              <a href="{{route('equipamento.index')}}" class="brand-logo">SGRE</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                @guest
                @else
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
    <script>@yield('js')</script>

</body>
</html>
