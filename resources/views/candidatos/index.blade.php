@extends('layouts.app')

@section('navegacion')

  @include('ui.adminnav')

@endsection

@section('content')

<h1 class="text-2xl text-center mt-10">{{ count($vacante->candidatos) }} Candidatos: <span class="font-bold">{{ $vacante->titulo }}</span></h1>

@if(count($vacante->candidatos) > 0)
  <ul class="max-w-md mx-auto mt-10">
      @foreach($vacante->candidatos as $candidato)
        <li class="p-5 bg-teal-100 mb-5 shadow-md rounded">
          <p class="mb-4">
            <span class="material-icons text-teal-500">
            person
            </span>
            <span class="font-bold">{{$candidato->nombre}}</span>
          </p>
          <p class="mb-4">
            <span class="material-icons text-teal-500">
            mail
            </span>
            <span class="font-bold"><a href="mailto:{{$candidato->email}}">{{$candidato->email}}</a></span>
          </p>
          <p class="mb-4">
            <span class="material-icons text-teal-500">
            phone
            </span>
            <span class="font-bold"><a href="tel:{{$candidato->telefono}}">{{$candidato->telefono}}</a></span> | 
            <span class="material-icons text-teal-500">
              whatsapp
            </span>
            <span class="font-bold"><a href="https://wa.me/{{$candidato->telefono}}">{{$candidato->telefono}}</a></span>
          </p>
          <p class="mb-4">
            
            <a class="bg-teal-500 p-3 inline-block text-xs uppercase text-white font-bold rounded" href="/storage/cv/{{$candidato->cv}}">
               <span class="material-icons text-white">
                picture_as_pdf
               </span> Ver CV</a>
          </p>
        </li>
      @endforeach
  </ul>
@else
<p class="mt-5 text-center">No hay candidatos</p>
@endif


@endsection
