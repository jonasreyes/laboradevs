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
              <li class="p-4 border-l-4 border-teal-500 bg-teal-100 shadow-md mb-5 rounded">
                <div class="boxNotify flex justify-between">
                  <span class="headNotify">
                    <p class="Notify text-teal-500 text-sm">
                      <span class="material-icons mr-1 md-18">message</span>
                     Nuevo Candidato
                    </p>
                  </span>
                  <span class="footerNotify font-normal text-grey-700">
                    <p class="text-right text-xs">
                      <span class="material-icons md-12 mr-2">schedule</span>{{ $notificacion->created_at->diffForhumans() }}
                    </p>
                  </span>
                </div>
                <div class="bodyNotify mt-2"> 
                  <p class="text-center">
                   Para: <span class="font-bold">{{ $data['vacante'] }}</span>
                  </p>
                </div>
              </li>


          
        @endforeach
    </ul>
@else

  <p class="text-center mt-5">No hay notificaciones</p>
@endif

@endsection
