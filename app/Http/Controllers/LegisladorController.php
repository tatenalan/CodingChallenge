<?php

// https://www.sitepoint.com/community/t/1-year-adding-in-date/8687/6

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\partido;
use App\legislador;
use Illuminate\Support\Arr;

class LegisladorController extends Controller
{


  // Nos muestra el formulario con los campos para completar
  public function index()
  {
    // Traemos los partidos para el select del form
    $partidos = partido::all();
    return view('AgregarLegislador', compact('partidos'));
  }

  public function store(Request $request)
  {

    $partidos = partido::all();

    // Generamos un array vacio de los partidos existentes.
    $partidosArray = [];
    foreach ($partidos as $partido) {
      // iteramos cada partido y lo vamos sumando al array creado. Nos quedaria un array asi : [Azul, Rojo, Verde]
      $partidosArray[] = $partido->id;
    }


    // Instanciamos un nuevo objeto Legislador
    $legislador = new legislador();

    // Consigna
    if (empty($request->partido)) {
      $legislador->partido_id = Arr::random($partidosArray);
      $legislador->automatico = true;
    } else {
      $legislador->partido_id = $request->partido;
      $legislador->automatico = false;
    }

    $legislador->nombre = $request->nombre;
    $legislador->apellido = $request->apellido;
    $legislador->email = $request->email;
    $legislador->telefono = $request->telefono;
    $legislador->direccion = $request->direccion;
    $legislador->pais = $request->pais;
    $legislador->votos = $request->votos;
    $legislador->inicioMandato = $request->inicioMandato;


    // creamos la variable date para guardar la fecha de inicio de mandato
    $date = $request->inicioMandato;
    // Lo pasamos a string to time
    $date = strtotime($date);
    // Le sumamos un año
    $new_date = strtotime('+ 1 year', $date);
    // Lo transformamos en formato date a nuestro gusto
    $legislador->finMandato = Date('Y-m-d', $new_date);


    // guardo el objeto Legislador instanciado en la base de datos
      $legislador->save();

  return redirect('/')
        ->with('status', 'Legislador agregado correctamente')
        ->with('operation', 'success');

  } // cierre de metodo store


    // Esta es la vista que ve el admin para editar o borrar Legisladores
    public function editview()
    {

      $legisladores = legislador::all();
      $partidos = partido::all();
      return view('adminpanel', compact('legisladores', 'partidos'));

    }


    // Para eliminar un Legislador de la base de datos
    public function eliminarlegislador(Request $request)
    {
      // Llamamos al legislador a eliminar mediante su id
      $legislador = legislador::find($request->id);
      // Lo eliminamos
      $legislador->delete();
      // Redirigimos
      return redirect("/adminpanel");

    }


} // cierre del Controlador
