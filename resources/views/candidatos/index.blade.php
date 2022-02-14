@extends('layouts.app')

  @section('styles')
    @include('ui.styles_material_icons')
  @endsection
@section('navegacion')

  @include('ui.adminnav')

@endsection

@section('content')

<h1 class="text-2xl text-center mt-10">{{ count($vacante->candidatos) }} Candidatos: <span class="font-bold">{{ $vacante->titulo }}</span></h1>

@if(count($vacante->candidatos) > 0)
  <ul class="max-w-sm mx-auto mt-10 md:max-w-md">
      @foreach($vacante->candidatos as $candidato)
        <li class="p-3 bg-teal-100 mb-5 shadow-md rounded flex flex-col md:flex-row items-center justify-between">
          <div class="flex flex-col">
            <span class="mb-2">
              <span class="material-icons text-teal-500">
              person
              </span>
              <span class="">{{$candidato->nombre}}</span>
            </span>
            <span class="mb-2">
              <span class="material-icons text-teal-500">
              mail
              </span>
              <span class=""><a href="mailto:{{$candidato->email}}">{{$candidato->email}}</a></span>
            </span>
            <span class="mb-2">
              <span class="material-icons text-teal-500">
              phone
              </span>
              <span class=""><a href="tel:{{$candidato->telefono}}">{{$candidato->telefono}}</a></span> 
              <!-- <span class="material-icons text-teal-500"> -->
              <!--   whatsapp -->
              <!-- </span> -->
              <!-- <span class="font-bold"><a href="https://wa.me/{{$candidato->telefono}}">{{$candidato->telefono}}</a></span> -->
            </span>
          </div>
            <span class="mx-5 mb-2 mt-4">
              <a class="bg-teal-500 py-4 px-5 text-xs uppercase text-white font-bold rounded shadow-md" href="/storage/cv/{{$candidato->cv}}">
                 <span class="material-icons text-white">
                  picture_as_pdf
                 </span> Ver CV</a>
            </span>
        </li>
      @endforeach
  </ul>
@else
<p class="mt-5 text-center">No hay candidatos</p>
@endif


@endsection
