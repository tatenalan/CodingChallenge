<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse collapse justify-content-between" id="navbarSupportedContent" style="">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" id="quienes-somos-nav" href="/">Agregar Legislador</a>
      </li>

    </ul>

    <ul class="navbar-nav d-flex">
      @guest
          <li class="nav-item">
              <a class="nav-link {{ request()->is('/login') ? 'active' : '' }}" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('/register') ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
              </li>
          @endif
      @else
        <li class="nav-item">
            <a class="nav-link {{ request()->is('/adminpanel') ? 'active' : '' }}" href="/adminpanel"><i class="fas fa-cog"></i></a>
        </li>
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Salir') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest
    </ul>

  </div>
</nav>

{{-- <nav>

    <ul>
      <li class="px-3"><a class="" href="/">Agregar Legislador</a></li>
    </ul>

    <ul class="d-flex px-3">
      @if (Route::has('login'))

        @auth
          <li><a href="{{ url('/home') }}">Inicio</a></li>
        @else

            <li><a href="{{ route('login') }}">Ingresar</a></li>

            @if (Route::has('register'))
            <li><a href="{{ route('register') }}">Registrarse</a></li>
            @endif
        @endauth

      @endif
    </ul>

</nav> --}}
