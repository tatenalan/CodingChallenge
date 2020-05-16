@extends('layouts.plantilla')
@section('titulo')
Panel de administrador
@endsection
@section('main')

  <div class="uk-container">

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
          <li uk-filter-control="sort: date; order: desc" class="uk-active"><a href="#">Fin del Mandato Ascendente Descendente</a></li>
        </ul>

      </div>

      <div class="js-filter uk-child-width-1-2 uk-child-width-1-3@m my-5" uk-grid>

        @foreach ($legisladores as $legislador)

          <div data-partido="{{$legislador->partido->nombre}}" date={{$legislador->inicioMandato}} class="uk-visible-toggle icons-product" tabindex="-1">

            <div class="uk-card uk-card-default uk-card-hover {{ $legislador->partido->nombre}}">

                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img class="uk-border-circle" width="40" height="40" src="/img/avatar.jpg">
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom">{{$legislador->nombre}} {{$legislador->apellido}}</h3>
                            <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">Mandato: {{$legislador->inicioMandato}} | {{$legislador->inicioMandato}}</time></p>
                        </div>
                    </div>
                </div>

                <div class="uk-card-body">
                    <p>Email <br> {{$legislador->email}} <br> Dirección <br> {{$legislador->direccion}} <br> País <br> {{$legislador->pais}} <br> Votos <br> {{$legislador->votos}}
                </div>

                <div class="uk-card-footer">
                    <a href="#" class="uk-button uk-button-text">Partido: {{$legislador->partido->nombre}}</a>

                    <div class="uk-flex-center pt-3" uk-grid>
                      <div class="uk-width-auto">
                        <ul class="uk-invisible-hover uk-iconnav">
                          <li class="rounded-icon ico mx-1"><span uk-icon="icon: pencil"></li>
                          <li class="rounded-icon ico mx-1"><span uk-icon="icon: trash"></li>
                        </ul>
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
