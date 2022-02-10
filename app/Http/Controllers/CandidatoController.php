<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\Vacante;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // Validación de los datos recibidos del formulario.
    $data = $request->validate([
      'nombre' => 'required|min:5',
      'email' => 'required|email',
      'telefono' => 'nullable',
      'cv' => 'required|mimes:pdf|max:1024', // máximo 1 MB.
      'vacante_id' => 'required'
    ]);

    // Almacenamiento de los archivos CV
    if ($request->file('cv')) {
      $archivo = $request->file('cv');
      $archivoNombre = time() . "." . $request->file('cv')->extension();
      $archivoUbicacion = public_path('/storage/cv');
      $archivo->move($archivoUbicacion, $archivoNombre);
    }

    $vacante = Vacante::find($data['vacante_id']);

    $vacante->candidatos()->create([
      'nombre' => $data['nombre'],
      'email' => $data['email'],
      'telefono' => $data['telefono'],
      'cv' => $archivoNombre
    ]);

    return back()->with('estado', 'Tus datos de contacto y CV han sido enviados correctamente al reclutador!!!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Candidato  $candidato
   * @return \Illuminate\Http\Response
   */
  public function show(Candidato $candidato)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Candidato  $candidato
   * @return \Illuminate\Http\Response
   */
  public function edit(Candidato $candidato)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Candidato  $candidato
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Candidato $candidato)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Candidato  $candidato
   * @return \Illuminate\Http\Response
   */
  public function destroy(Candidato $candidato)
  {
    //
  }
}
