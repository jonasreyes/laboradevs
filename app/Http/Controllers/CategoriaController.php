<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
  //
  public function index()
  {
    return "categorias.index = retornar listado de categorías... permitir en ellas el acceso a edición para incorporar una descripción de la categoría";
  }

  public function show()
  {
    return "categorias/id = retornar la vista de una categoría según su id, presentar su descripción y la opción para actualizarla. No se debe permitir el eliminado duro de las categorías, ya que pudieramos perder registros asociados a las mismas. ";
  }
}
