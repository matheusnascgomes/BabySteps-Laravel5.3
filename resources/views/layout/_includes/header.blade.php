<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <header>
      <nav class="deep-orange" >
        <div class="container nav-wrapper ">
          <a href="#!" class="brand-logo">Web Gomes Courses</a>
          <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('site.home') }}">Home</a></li>
            @if(Auth::guest())
              <li><a href="{{ route('site.login') }}">Login</a></li>
            @else
              <li><a href="">{{ Auth::user()->name }}</a></li>
              <li><a href="{{ route('admin.courses') }}">Cursos</a></li>
              <li><a href="{{ route('site.logout') }}">Sair</a></li>
            @endif

          </ul>
          <ul class="side-nav" id="mobile">
            <li><a href="/">Home</a></li>
            <li><a href="{{route('admin.courses.add')}}">Cursos</a></li>

          </ul>
        </div>
      </nav>

    </header>
