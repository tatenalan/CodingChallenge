<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class legislador extends Model
{
  public $table = "legisladores"; // Le indicamos como se llama nuestra tabla en la DB
  public $guarded = []; // Para poder modificar todos los valores.

  public function partido()
  {
    return $this->belongsTo("App\partido", "partido_id"); // Un legislador va a pertenecer a un partido. (Relacion uno a muchos)
  }
}
