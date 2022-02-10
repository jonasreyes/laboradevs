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

  // relación con el salario
  public function salario()
  {
    // aquí mi comprensión quizas mejora, estoy entendiendo que este método declara: Yo salario pertenezco a Salario::class..
    return $this->belongsTo(Salario::class);
  }

  public function ubicacion()
  {
    return $this->belongsTo(Ubicacion::class);
  }

  public function experiencia()
  {
    return $this->belongsTo(Experiencia::class);
  }

  public function reclutador()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  // relación de 1:n vacante a candidatos, nótese que he definido el método en singular para mantener la lógica
  // de que se nombre exactamente como el modelo al que apunta.
  // si diese error en un futuro ya que que deberé renombrar el método al plural y se habrá despejado la duda.
  public function candidatos()
  {
    return $this->hasMany(Candidato::class);
  }
}
