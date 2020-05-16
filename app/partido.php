<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partido extends Model
{
  public $guarded = []; // Para poder modificar valores.

  public function functionlegislador()
  {
    return $this->hasMany("App\partido", "partido_id"); // Un partido va a tener uno a mosa legisladores. (Relacion uno a muchos)
  }
}
