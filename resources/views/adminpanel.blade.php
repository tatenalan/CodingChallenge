@extends('layouts.plantilla')
@section('titulo')
Panel de administrador
@endsection
@section('main')

  <div class="uk-container-expand p-5 bg2">

    <div class="mt-4 text-center" uk-filter="target: .js-filter; animation: 500">
      <div class="filter-panel">

        <ul class="uk-subnav uk-subnav-pill">
          <li class="uk-active" uk-filter-control><a href="#">TODOS</a></li>
          <li uk-filter-control="[data-partido='Azul']"><a href="#">Partido Azul</a></li>
          <li uk-filter-control="[data-partido='Verde']"><a href="#">Partido Verde</a></li>
          <li uk-filter-control="[data-partido='Rojo']"><a href="#">Partido Rojo</a></li>
        </ul>


        <ul class="uk-subnav uk-subnav-pill">
          <li class="uk-first-column" uk-filter-control="sort: date"><a href="#">Fin del Mandato Ascendente</a></li>
          <li uk-filter-control="sort: date; order: desc" class="uk-active"><a href="#">Fin del Mandato Descendente</a></li>
        </ul>

        @error('nombre')
          <p class="errorForm">{{ $message }}</p>
        @enderror
        @error('apellido')
          <p class="errorForm">{{ $message }}</p>
        @enderror
        @error('email')
          <p class="errorForm">{{ $message }}</p>
        @enderror
        @error('direccion')
          <p class="errorForm">{{ $message }}</p>
        @enderror
        @error('pais')
          <p class="errorForm">{{ $message }}</p>
        @enderror
        @error('votos')
          <p class="errorForm">{{ $message }}</p>
        @enderror
        @error('inicioMandato')
          <p class="errorForm">{{ $message }}</p>
        @enderror
        @error('finMandato')
          <p class="errorForm">{{ $message }}</p>
        @enderror

      </div>

      <div class="js-filter uk-child-width-1 uk-child-width-1-2@m uk-child-width-1-3@l my-5" uk-grid>

        @foreach ($legisladores as $legislador)

          <div data-partido="{{$legislador->partido->nombre}}" date={{$legislador->inicioMandato}} class="uk-visible-toggle icons-product" tabindex="-1">

            <div class="uk-card uk-card-default uk-card-hover {{ $legislador->partido->nombre}}">
              <form id="form" action="/updatelegislador" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img class="uk-border-circle" width="40" height="40" src="/img/avatar.jpg">
                        </div>
                        <div class="uk-width-expand">

                          <input id="nombre" class="input-nombre edit" type="text" name="nombre" value="{{$legislador->nombre}}" placeholder="Ingrese un nombre">
                          <input id="apellido" class="input-nombre edit" type="text" name="apellido" value="{{$legislador->apellido}}" placeholder="Ingrese un apellido">
                        </div>
                    </div>
                </div>

                <div class="uk-card-body">

                  <label for="email">Email</label><br>
                  <input id="email" type="email" name="email" class="edit" value="{{$legislador->email}}" placeholder="Ingrese su email"><br>

                  <label for="direccion">Dirección</label><br>
                  <input id="direccion" type="text" name="direccion" class="edit" value="{{$legislador->direccion}}" placeholder="Ingrese su dirección"><br>

                  <label for="pais">País</label><br>
                  <select id="pais" name="pais" class="edit">
                    <option value="{{$legislador->pais}}">{{$legislador->pais}}</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Chile">Chile</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Ecuador">Ecuador</option>
                  </select><br><br>

                  <label for="votos">Cantidad de votos</label><br>
      					  <input id="votos" type="number" name="votos" class="edit" value="{{$legislador->votos}}" placeholder="Cantidad de votos">

                </div>

                <div class="uk-card-footer">
                  <select id="partido" name="partido_id" class="edit">
                    <option value="{{$legislador->partido->id}}">Partido {{$legislador->partido->nombre}}</option>
                    @foreach ($partidos as $partido)
                        <option value="{{$partido->id}}">Partido {{$partido->nombre}}</option>
                    @endforeach
                  </select>

                    <div class="uk-flex-center pt-3" uk-grid>
                      <div class="uk-width-auto">
                        <ul class="uk-invisible-hover uk-iconnav">
                          <input type="hidden" name="id" class="edit" value="{{$legislador->id}}">
                          <button type="submit" class="edit"><li class="rounded-icon ico mx-1 edit"><span uk-icon="icon: pencil"></li></button>

              </form>
                            <form action="/eliminarlegislador" method="post" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="id" class="edit" value="{{$legislador->id}}">
                              <button type="submit" class="edit"><li class="rounded-icon ico mx-1 edit"><span uk-icon="icon: trash"></li></button>
                            </form>
                        </ul>
                      </div>

                      <div>
                      <input id="inicioMandato" class="uk-text-meta uk-margin-remove-top edit" type="date" name="inicioMandato" value="{{$legislador->inicioMandato}}" placeholder="Indique una fecha"><br>
                      <input id="finMandato" class="uk-text-meta uk-margin-remove-top edit" type="date" name="finMandato" value="{{$legislador->finMandato}}" placeholder="" readonly>
                      </div>

                  </div>

                </div>

            </div>

          </div>

        @endforeach

      </div>

    </div>

  </div>

@endsection
