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
<body id="app">
    <header>
      @include('layouts._site._nav')
    </header>
    <main>
      @yield('content')
    </main>
    <footer class="page-footer blue">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Site Dinâmico</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="{{ route('site.home') }}">HOME</a></li>
              <li><a class="grey-text text-lighten-3" href="{{ route('site.sobre') }}">Sobre</a></li>
              <li><a class="grey-text text-lighten-3" href="{{ route('site.contato') }}">Contato</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2016 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script type="text/javascript" src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/init.js')}}"></script>
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>
