@extends('layouts.app')

@section('navegacion')

  @include('ui.adminnav')

@endsection

@section('content')

  <h1 class="text-2xl text-center mt-10">Notificaciones</h1>


@if(count($notificaciones) > 0)

    <ul class="mt-10 max-w-md mx-auto">
        @foreach($notificaciones as $notificacion)

          @php

            $data = $notificacion->data

          @endphp
              <li class="p-5 bg-teal-100 shadow-md mb-5 rounded">
                <div class="boxNotify">
                  <span class="headNotify block">
                    <p class="Notify text-teal-500">
                      <span class="material-icons mr-2">message</span>
                      Nuevo Candidato para:
                    </p>
                  </span>
                  <span class="bodyNotify block text-center mb-4 mt-4"> 
                    <p class="">
                      <span class="font-bold">{{ $data['vacante'] }}</span>
                    </p>
                  </span>
                  <span class="footerNotify block font-normal text-grey-700">
                    <p class="text-right text-sm">
          <span class="material-icons md-18 mr-2">schedule</span>{{ $notificacion->created_at->diffForhumans() }}
                    </p>
                  </span>
                </div>
              </li>


          
        @endforeach
    </ul>
@else

  <p class="text-center mt-5">No hay notificaciones</p>
@endif

@endsection
