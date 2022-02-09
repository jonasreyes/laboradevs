<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
  use HasFactory;
  /**
    ok, no borraré las lineas siguientes para no olvidar este error de logica que cometí:
    Este modelo no tiene capacidad para almacenar información de las vacantes, ya que su
    tabla no contempla un campo que sirva para almacenar claves foránea de Vacantes.
    Al mismo tiempo no hay manera de que esta tabla "ubicacions" pueda saber de vacante,
    por tanto no hay necesidad de declarar relación en este modelo porque ya ha sido 
    declarado en el modelo de Vacante donde sí se consulta de los datos de ubicacions.
    Aún así aquí se expresan una relación de uno a varios: 1:N, una ubicación en varias
    vacantes.
   */


  // public function vacante()
  // {
  /**
      Eloquent utilizará el nombre del metodo de la relación para sumarle el sufijo _id y con ello determinar el nombre del campo
      que ejerce como clave foránea, a menos que nosotros los programadores indiquemos explicitamente el nombre mediante el uso 
      de un segundo parametro.
       
      Una ubicación puede tener muchas vacantes, sin embargo una vacante puede tener solo una ubicación.
      la relacion por tanto es de muchos a uno. N:1, creo que aquí ademas corresponde un método de relación con
      vancante en plural: vacantes debido a la afirmación anterior.
   */
  // return $this->hasMany(Vacante::class);
  // }
  /**
   *
    Actualización: viernes 04 de febrero 2022
    Creo que deberé borrar los comentatios anteriores debido a que pueden generara seria confusión.
    concluciones que estimo acertadas a la fecha:

    Lectura de diagramas de E-R (Entidad Relación)
    recomiendo realizarla de izquierda a derecha empezando por la cardinalidad de la relación
    luega mencionar la primera entidad y luego seguir al centro para especificar la entidad de relación
    siguiendo a la derecha para especificar la cardinalidad de la siguiente entidad y luego mencionar la entidad.

    Sobre como determinar cuando usar BelongsTo: Cuando la relación del modelo que necesita generar un método de
    relación con otro se sustenta en una relacion Fuerte, es decir que siempre habrá pertinencia de al menos 1 dato.
    (Puede tener al menos 1 y nunca cero)

    Cuando la relación es debil, es decir que puede que haya cero pertinencia entonces esas relaciones deben empezar por HasEtc..
    Es decir, puede tener hasta 1 per puede no tener.
   */
}
