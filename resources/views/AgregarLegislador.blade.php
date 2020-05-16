@extends('layouts.plantilla')
@section('titulo')
Registrar Legislador
@endsection
@section('main')


      <div class="container">

        <h2 class="text-center mb-5">Crear Legislador</h2>

        <form id="form" class="" action="/AgregarLegislador" method="post">
          @csrf

          <div class="row">


          <div class="form-group col-md-6">
            <label for="nombre">Nombre</label>
					  <input id="nombre" class="form-control" type="text" name="nombre" value="" placeholder="Ingrese su nombre" >
            <small id="Help" class="form-text text-muted"></small>
            <div id="nombre_error" class="errorForm"></div>
          </div>


          <div class="form-group col-md-6">
            <label for="apellido">Apellido</label>
					  <input id="apellido" class="form-control" type="text" name="apellido" value="" placeholder="Ingrese su apellido" >
            <small id="Help" class="form-text text-muted"></small>
            <div id="apellido_error" class="errorForm"></div>
          </div>


          </div>

          <div class="row">

          <div class="form-group col-md-6">
            <label for="email">Correo Electrónico</label>
					  <input id="email" class="form-control" type="email" name="email" value="" placeholder="Ingrese su correo electrónico" >
            <small id="Help" class="form-text text-muted"></small>
            <div id="email_error" class="errorForm"></div>
          </div>


          <div class="form-group col-md-6">
            <label for="telefono">Teléfono</label>
					  <input id="telefono" class="form-control" type="number" name="telefono" value="" placeholder="Ingrese su teléfono" >
            <small id="Help" class="form-text text-muted"></small>
            <div id="telefono_error" class="errorForm"></div>
          </div>


        </div>

        <div class="row">

          <div class="form-group col-md-6">
            <label for="direccion">Dirección</label>
            <input id="direccion" class="form-control" type="text" name="direccion" value="" placeholder="Ingrese su dirección" >
            <small id="Help" class="form-text text-muted"></small>
            <div id="direccion_error" class="errorForm"></div>
          </div>


          <div class="form-group col-md-6">
            <label for="pais">País</label>
            <select id="pais" class="form-control" name="pais">
              <option value="">Seleccione un pais</option>
              <option value="Argentina">Argentina</option>
              <option value="Brasil">Brasil</option>
              <option value="Bolivia">Bolivia</option>
              <option value="Chile">Chile</option>
              <option value="Colombia">Colombia</option>
              <option value="Ecuador">Ecuador</option>
            </select>
            <div id="pais_error" class="errorForm"></div>
          </div>


        </div>

        <div class="row">

          <div class="form-group col-md-6">
            <label for="votos">Cantidad de votos</label>
					  <input id="votos" class="form-control" type="number" name="votos" value="" placeholder="Ingrese su cantidad de votos" >
            <small id="Help" class="form-text text-muted"></small>
            <div id="votos_error" class="errorForm"></div>
          </div>


          <div class="form-group col-md-6">
            <label for="partido">Partido *</label>
            <select id="partido" class="form-control" name="partido">
              <option value="" >Seleccione un partido</option>
              @foreach ($partidos as $partido)
                  <option value="{{$partido->id}}">{{$partido->nombre}}</option>
              @endforeach
            </select>
          </div>

          </div>

          <div class="row">

          <div class="form-group col-md-6">
            <label for="inicioMandato">Inicio de su mandato</label>
					  <input id="inicioMandato" class="form-control" type="date" name="inicioMandato" value="" placeholder="Indique una fecha" >
            <small id="Help" class="form-text text-muted"></small>
            <div id="inicioMandato_error" class="errorForm"></div>
          </div>


          <div class="form-group col-md-6">
            <label for="finMandato">Fin de su mandato</label>
					  <input id="finMandato" class="form-control" type="text" name="finMandato" value="" placeholder="" readonly>
            <small id="Help" class="form-text text-muted">Este campo es únicamente de lectura</small>
          </div>

        </div>

          <div>
            {{-- Input oculto que nos va indicar si se genero automaticamente el partido o no --}}
            <input type="text" name="automatico" value="" hidden>
          </div>

          <small id="Help" class="form-text text-muted">Los campos con un * son opcionales</small>

        <div class="text-center mt-3">
          <button id="submit" type="submit" class="btn btn-info">REGISTRAR LEGISLADOR</button>
        </div>


        </form>

      </div>

@endsection
