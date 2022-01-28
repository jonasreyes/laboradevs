<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Vacante extends Model
{
  use HasFactory;
  protected $fillable = [
    'titulo',
    'categoria_id',
    'experiencia_id',
    'ubicacion_id',
    'salario_id',
    'descripcion',
    'imagen',
    'skills',
  ];

  // Establecemos la relación de N:1 (muchas vacantes pueden pertener a un usuario)
  // con esto eliminamos la advertencia de Laravel de estar ejecutando un método desconocido

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  // relación con categorias de 1:1
  public function categoria()
  {
    return $this->belongsTo(Categoria::class);
  }
}
