@extends ('layouts.app')

@section('navegacion')

@include('ui.adminnav')

@endsection

@section('content')
<h1 class="text-3xl text-center mt-10">{{ $vacante->titulo }}</h1>

<div class="mt-10 mb-20 md:flex items-start">
  <div class="md:w-3/5">
    <p class="block text-grey-700 font-bold my-2">
      Publicado: <span class="font-normal">{{ $vacante->created_at->diffForHumans() }}</span>
    </p>

    <p class="block text-grey-700 font-bold my-2">
      Categoría: <span class="font-normal">{{ $vacante->categoria->nombre }}</span>
    </p>

    <p class="block text-grey-700 font-bold my-2">
      Salario: <span class="font-normal">{{ $vacante->categoria->nombre }}</span>
    </p>

    <p class="block text-grey-700 font-bold my-2">
      Ubicación: <span class="font-normal">{{ $vacante->categoria->nombre }}</span>
    </p>

    <p class="block text-grey-700 font-bold my-2">
      Experiencia: <span class="font-normal">{{ $vacante->categoria->nombre }}</span>
    </p>

  </div>

  <div class="md:w-2/5">2</div>
</div>

@endsection
