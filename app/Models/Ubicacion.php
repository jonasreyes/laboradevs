<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
  use HasFactory;

  public function vacante()
  {
    /**
      Eloquent utilizará el nombre del metodo de la relación para sumarle el sufijo _id y con ello determinar el nombre del campo
      que ejerce como clave foránea, a menos que nosotros los programadores indiquemos explicitamente el nombre mediante el uso 
      de un segundo parametro.
       
      Una ubicación puede tener muchas vacantes, sin embargo una vacante puede tener solo una ubicación.
      la relacion por tanto es de muchos a uno. N:1, creo que aquí ademas corresponde un método de relación con
      vancante en plural: vacantes debido a la afirmación anterior.
     */
    return $this->hasMany(Vacante::class);
  }
}
