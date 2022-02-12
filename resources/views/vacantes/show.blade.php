@extends ('layouts.app')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<h1 class="text-3xl text-center mt-10 text-teal-700">{{ $vacante->titulo }}</h1>

<div class="mt-10 mb-20 md:flex items-start">
  <div class="md:w-3/5">
    <p class="block text-teal-700 font-bold my-2">
      <span class="material-icons">person</span> Por: <span class="font-normal text-grey-700">{{ $vacante->reclutador->name }}</span>
    </p>
    <p class="block text-teal-700 font-bold my-2">
      <span class="material-icons">event</span> Publicado: <span class="font-normal text-grey-700">{{ $vacante->created_at->diffForhumans() }}</span>
    </p>

    <p class="block text-teal-700 font-bold my-2">
      <span class="material-icons">style</span> Categoría: <span class="font-normal text-grey-700">{{ $vacante->categoria->nombre }}</span>
    </p>

    <p class="block text-teal-700 font-bold my-2">
      <span class="material-icons">price_check</span> Salario: <span class="font-normal text-grey-700">{{ $vacante->salario->nombre }}</span>
    </p>

    <p class="block text-teal-700 font-bold my-2">
      <span class="material-icons">location_on</span> Ubicación: <span class="font-normal text-grey-700">{{ $vacante->ubicacion->nombre }}</span>
    </p>

    <p class="block text-teal-700 font-bold my-2">
      <span class="material-icons">engineering</span> Experiencia: <span class="font-normal text-grey-700">{{ $vacante->experiencia->nombre }}</span>
    </p>

    <h2 class="text-2xl mb-10 text-center mt-5 text-teal-700"><span class="material-icons">school</span> Conocimientos y Tecnologías deseables</h2>
    @php
    $arraySkills = explode(",", $vacante->skills);
    @endphp

    @foreach($arraySkills as $skill)

    <p class="inline-block border py-2 px-8 border-grey-500 rounded text-grey-700 my-2">
      {{ $skill }}
    </p>
    @endforeach

    <a href="/storage/vacantes/{{$vacante->imagen}}" data-lightbox="imagen" data-title="Vacante: {{ $vacante->titulo }}">
      <img src="/storage/vacantes/{{ $vacante->imagen }}" class="w-40 mt-10">
      <div class="descripcion mt-10 mb-5">{!! $vacante->descripcion !!}</div>
    </a>

  </div>
  @include('ui.contacto')
</div>

@endsection
