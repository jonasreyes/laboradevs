<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categoria;
use App\Models\Skill;
use App\Models\Experiencia;
use App\Models\Salario;
use App\Models\Ubicacion;
use App\Models\Vacante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VacanteController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // $vacantes = auth()->user()->vacantes;
    $vacantes = Vacante::where('user_id', auth()->user()->id)->simplePaginate(10);



    return view('vacantes.index')->with(compact('vacantes'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

    //consultas para alimentar campos del formulario
    $categorias = Categoria::all();
    $experiencias = Experiencia::all();
    $ubicacions = Ubicacion::all();
    $salarios = Salario::all();
    $skills = Skill::all();

    // llamamos la vista.
    return view('vacantes.create')->with(compact('categorias', 'experiencias', 'ubicacions', 'salarios', 'skills'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
    $data = $request->validate([
      'titulo' => 'required|min:8',
      'categoria' => 'required',
      'experiencia' => 'required',
      'ubicacion' => 'required',
      'salario' => 'required',
      'descripcion' => 'required|min:50',
      'imagen' => 'required',
      'skills' => 'required',
    ]);

    // Almacenar en la BD
    // aquí se presenta un detallito.
    auth()->user()->vacantes()->create([
      'titulo' => $data['titulo'],
      'categoria_id' => $data['categoria'],
      'experiencia_id' => $data['experiencia'],
      'ubicacion_id' => $data['ubicacion'],
      'salario_id' => $data['salario'],
      'descripcion' => $data['descripcion'],
      'imagen' => $data['imagen'],
      'skills' => $data['skills'],
    ]);

    return redirect()->action([VacanteController::class, 'index']);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Vacante  $vacante
   * @return \Illuminate\Http\Response
   */
  public function show(Vacante $vacante)
  {
    return view('vacantes.show')->with(compact('vacante'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Vacante  $vacante
   * @return \Illuminate\Http\Response
   */
  public function edit(Vacante $vacante)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Vacante  $vacante
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Vacante $vacante)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Vacante  $vacante
   * @return \Illuminate\Http\Response
   */
  public function destroy(Vacante $vacante)
  {
    //
  }

  // Campos extras
  public function imagen(Request $request)
  {
    $imagen = $request->file('file');
    $nombreImagen = time() . '.' . $imagen->extension();
    $imagen->move(public_path('storage/vacantes'), $nombreImagen);
    return response()->json(['correcto' => $nombreImagen]);
  }

  // Borrar imagen via Ajax
  public function borrarimagen(Request $request)
  {
    if ($request->ajax()) {
      $imagen = $request->get('imagen');

      if (File::exists('storage/vacantes/' . $imagen)) {
        File::delete('storage/vacantes/' . $imagen);
      }

      return response('Imagen Eliminada', 200);
    }
  }

  // cambiar estado de la vacante (1:Activo | 0:Inactivo) usando AXIOS de vue.js
  public function estado(Request $request, Vacante $vacante)
  {
    // Leer nuevo estado y asignarlo
    $vacante->activa = $request->estado;

    // Guardando el estado en la BD
    $vacante->save();

    return response()->json(['respuesta' => 'Estado de vacante actualizada correctamente!']);
  }
}
