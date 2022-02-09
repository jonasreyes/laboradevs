@extends ('layouts.app')


@section('navegacion')
@include('ui.adminnav')
@endsection


@section('content')
<h1 class="text-2xl text-center mt-10">Administrar Vacantes</h1>

@if(count($vacantes) > 0)
<div class="flex flex-col mt-10">
  <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
    <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-grey-200">
      <table class="min-w-full">
        <thead class="bg-grey-100 ">
          <tr>
            <th class="px-6 py-3 border-b border-grey-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
              Titulo Vacante
            </th>
            <th class="px-6 py-3 border-b border-grey-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
              Estado
            </th>
            <th class="px-6 py-3 border-b border-grey-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
              Candidatos
            </th>
            <th class="px-6 py-3 border-b border-grey-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
              Acciones
            </th>
          </tr>
        </thead>
        <tbody class="bg-white">
          @foreach ($vacantes as $vacante)
          <tr>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-grey-200">
              <div class="flex items-center">

                <div class="ml-4">
                  <div class="text-sm leading-5 font-bold text-grey-900"><a href="{{ route('vacantes.show',[$vacante->id]) }}">{{$vacante->titulo}}</a></div>
                  <div class="text-sm leading-5 text-grey-500">Categoria: <strong><a href="#">{{ $vacante->categoria->nombre }}</a></strong></div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-grey-200">
              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
              {{ $vacante->activa ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}
                ">
                {!! $vacante->activa ? '<span class="material-icons">
                  done_all
                </span> Activa' : '<span class="material-icons">
                  remove_done
                </span> Inactiva' !!}

              </span>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-grey-200 text-sm leading-5 text-gray-500">
              <a href="" class="text-grey-500 hover:text-gray-600"> Candidatos</a>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-grey-200 text-sm leading-5 font-medium">
              <a href="{{ route('vacantes.show',['vacante' =>$vacante->id]) }}" class="text-blue-600 hover:text-blue-900 mr-2"><span class="material-icons">
                  find_in_page
                </span></a>
              <a href="#" class="text-teal-600 hover:text-teal-900 mr-2"><span class="material-icons">
                  edit_note
                </span></a>
              <a href="#" class="text-red-600 hover:text-red-900"><span class="material-icons">
                  delete_forever
                </span></a>
            </td>
          </tr>
          @endforeach


        </tbody>
      </table>
    </div>
  </div>
</div>
{{ $vacantes->links() }}
@else

<p class="text-center mt-10 text-grey-700">
  <span class="material-icons outline">info_outline</span> ¡No tienes vacantes aún!
</p>
@endif
@endsection
