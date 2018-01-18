<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/materialize/dist/css/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">
        
      <nav>
        <div class="nav-wrapper blue">
            <div class="container">
              <a href="#!" class="brand-logo">Logo</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Home</a></li>
              </ul>
              <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Home</a></li>
              </ul>
            </div>
        </div>
      </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/init.js')}}"></script>
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>
