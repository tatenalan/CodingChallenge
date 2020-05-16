<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <title>@yield('titulo')</title>

    {{-- Links --}}

    @include('partials.links')

  </head>

  <body>

    <header>

      {{-- Navbar --}}

      @include('partials.navbar')

    </header>


    <main id="main">

      {{-- Notificaciones --}}
      @if (session('status'))
        <div class="wow animated fadeInDown alert alert-success sticky-notification">
          {{session('status')}}
        </div>
      @endif


      @yield('main')


    </main>

    {{-- Scripts --}}

    @include('partials.scripts')

  </body>
</html>
