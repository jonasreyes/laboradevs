@extends ('layouts.app')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/css/medium-editor.min.css" integrity="sha512-zYqhQjtcNMt8/h4RJallhYRev/et7+k/HDyry20li5fWSJYSExP9O07Ung28MUuXDneIFg0f2/U3HJZWsTNAiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/basic.min.css" integrity="sha512-MeagJSJBgWB9n+Sggsr/vKMRFJWs+OUphiDV7TJiYu+TNQD9RtVJaPDYP8hA/PAjwRnkdvU+NsTncYTKlltgiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('navegacion')
@include('ui.adminnav')
@endsection


@section('content')
<h1 class="text-2xl text-center mt-10">Nueva Vacante</h1>

<form action="{{ route('vacantes.store') }}" method="POST" class="max-w-lg mx-auto my-10">
  @csrf

  <div class="mb-5">
    <label for="titulo" class="block text-grey-700 text-sm mb-2">
      Título Vacante:
    </label>

    <input id="titulo" type="text" class="p-3 bg-white rounded form-input w-full @error('titulo ') is-invalid @enderror" name="titulo" value="{{ old('titulo') }}" placeholder="Título de la Vacante" autofocus>

    @error('titulo')
    <div class="bg-red-100 border border-red-400 border-l-4 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
      <strong class="font-bold">¡Error!</strong>
      <span class="block">{{ $message }}</span>
    </div>
    @enderror
  </div>

  <!-- Importamos la lista de categorias desde la base de datos. -->
  <div class="mb-5">
    <label for="categoria" class="block text-grey-700 text-sm mb-2">
      Categoría:
    </label>
    <select id="categoria" class="block appearance-none w-full border border-grey-200 text-grey-700 rounded leading-tight focus:bg-white focus:border-grey-500 p-3 bg-white" name="categoria">
      <option disabled selected>- Selecciona -</option>
      @foreach ($categorias as $categoria)
      <option {{ old('categoria') == $categoria->id ? 'selected' : '' }} value="{{ $categoria->id }}">{{$categoria->nombre}}</option>
      @endforeach
    </select>

    @error('categoria')
    <div class="bg-red-100 border border-red-400 border-l-4 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
      <strong class="font-bold">¡Error!</strong>
      <span class="block">{{ $message }}</span>
    </div>
    @enderror
  </div>

  <!-- Importamos la lista de Experiencias desde la base de datos. -->
  <div class="mb-5">
    <label for="experiencia" class="block text-grey-700 text-sm mb-2">
      Experiencia:
    </label>
    <select id="experiencia" class="block appearance-none w-full border border-grey-200 text-grey-700 rounded leading-tight focus:bg-white focus:border-grey-500 p-3 bg-white" name="experiencia">
      <option disabled selected>- Selecciona -</option>
      @foreach ($experiencias as $experiencia)
      <option {{ old('experiencia') == $experiencia->id ? 'selected' : '' }} value="{{ $experiencia->id }}">{{$experiencia->nombre}}</option>
      @endforeach
    </select>

    @error('experiencia')
    <div class="bg-red-100 border border-red-400 border-l-4 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
      <strong class="font-bold">¡Error!</strong>
      <span class="block">{{ $message }}</span>
    </div>
    @enderror
  </div>

  <!-- Importamos la lista de Ubicaciones desde la base de datos. -->
  <div class="mb-5">
    <label for="ubicacion" class="block text-grey-700 text-sm mb-2">
      Ubicación:
    </label>
    <select id="ubicacion" class="block appearance-none w-full border border-grey-200 text-grey-700 rounded leading-tight focus:bg-white focus:border-grey-500 p-3 bg-white" name="ubicacion">
      <option disabled selected>- Selecciona -</option>
      @foreach ($ubicacions as $ubicacion)
      <option {{ old('ubicacion') == $ubicacion->id ? 'selected' : '' }} value="{{ $ubicacion->id }}">{{$ubicacion->nombre}}</option>
      @endforeach
    </select>

    @error('ubicacion')
    <div class="bg-red-100 border border-red-400 border-l-4 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
      <strong class="font-bold">¡Error!</strong>
      <span class="block">{{ $message }}</span>
    </div>
    @enderror
  </div>

  <!-- Importamos la lista de Salarios desde la base de datos. -->
  <div class="mb-5">
    <label for="salario" class="block text-grey-700 text-sm mb-2">
      Salario:
    </label>
    <select id="salario" class="block appearance-none w-full border border-grey-200 text-grey-700 rounded leading-tight focus:bg-white focus:border-grey-500 p-3 bg-white" name="salario">
      <option disabled selected>- Selecciona -</option>
      @foreach ($salarios as $salario)
      <option {{ old('salario') == $salario->id ? 'selected' : '' }} value="{{ $salario->id }}">{{$salario->nombre}}</option>
      @endforeach
    </select>

    @error('salario')
    <div class="bg-red-100 border border-red-400 border-l-4 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
      <strong class="font-bold">¡Error!</strong>
      <span class="block">{{ $message }}</span>
    </div>
    @enderror
  </div>

  <!-- # Caja de Edición -->
  <div class="mb-5">
    <label for="descripcion" class="block text-grey-700 text-sm mb-2">
      Descripción del Puesto:
    </label>

    <div class="editable bg-white p-3 rounded w-full form-input text-grey-700"></div>
    <input type="hidden" name="descripcion" id="descripcion" value="{{ old('descripcion') }}">

    @error('descripcion')
    <div class="bg-red-100 border border-red-400 border-l-4 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
      <strong class="font-bold">¡Error!</strong>
      <span class="block">{{ $message }}</span>
    </div>
    @enderror
  </div>

  <!-- # Caja de Imagen -->
  <div class="mb-5">
    <label for="imagen" class="block text-grey-700 text-sm mb-2">
      Imagen Vacante:
    </label>

    <div id="dropzoneDevJobs" class="dropzone rounded bg-white p-5 text-center"></div>
    <input type="hidden" id="imagen" name="imagen">
    <p id="error" class=""></p>

  </div>

  <!-- # Caja de Skills -->
  <div class="mb-5">
    <label for="skills" class="block text-grey-700 text-sm mb-2">
      Habilidades y Conocimientos:
    </label>
    <lista-skills :skills="{{ json_encode($skills) }}"></lista-skills>
  </div>


  <div class="mb-5">
    <button type="submit" class="w-full p-3 font-bold text-grey-100 uppercase bg-teal-500 hover:bg-teal-700 focus:outline-none focus:shadow-outline ">
      Guardar Vacante
    </button>
  </div>
</form>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/js/medium-editor.min.js" integrity="sha512-5D/0tAVbq1D3ZAzbxOnvpLt7Jl/n8m/YGASscHTNYsBvTcJnrYNiDIJm6We0RPJCpFJWowOPNz9ZJx7Ei+yFiA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/dropzone-min.js" integrity="sha512-FFyHlfr2vLvm0wwfHTNluDFFhHaorucvwbpr0sZYmxciUj3NoW1lYpveAQcx2B+MnbXbSrRasqp43ldP9BKJcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  Dropzone.autoDiscover = false;
  document.addEventListener('DOMContentLoaded', () => {
    // MediumEditor
    const editor = new MediumEditor('.editable', {
      toolbar: {
        buttons: ['bold', 'italic', 'underline', 'quote', 'anchor', 'justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull', 'orderedlist', 'unorderedlist', 'h2', 'h3'],
        static: true,
        sticky: true
      },
      placeholder: {
        text: 'Información de la Vacante.'
      }
    });

    // Agrega al input hidden lo que el usuario escribe en el medium editor.
    editor.subscribe('editableInput', function(eventObj, editable) {
      const contenido = editor.getContent();
      document.querySelector('#descripcion').value = contenido;
    });

    // Llena el editor con el contenido del input hidden.
    editor.setContent(document.querySelector('#descripcion').value);

    // Dropzone
    const dropzoneDevJobs = new Dropzone('#dropzoneDevJobs', {
      url: "/vacantes/imagen",
      dictDefaultMessage: 'Sube aquí tu archivo!',
      acceptedFiles: ".png, .jpg, .jpeg, .gif, .bmp, .pdf",
      addRemoveLinks: true,
      dictRemoveFile: "Borrar Archivo",
      maxFiles: 1,
      headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
      },
      success: function(file, response) {
        console.log(response.correcto)
        // console.log(file) 
        document.querySelector('#error').textContent = '';
        document.querySelector('#imagen').value = response.correcto;

        // añadir al objeto de archivo el nombre del servidor
        file.nombreServidor = response.correcto

      },
      // error: function(file, response) {
      //   document.querySelector('#error').textContent = 'Formato no válido!';
      // },
      maxfilesexceeded: function(file) {
        // console.log('archivos excedidos')
        document.querySelector('#error').textContent = 'Número máximo de archivos excedidos, se ha sustituido la imágen previa por la última que UD. ha pasado. ';
        if (this.files[1] != null) {
          this.removeFile(this.files[0]); // eliminamos el archivo anterior
          this.addFile(file) // Agrega el archivo nuevo.
        }
      },
      removedfile: function(file, response) {
        file.previewElement.parentNode.removeChild(file.previewElement);
        params = {
          imagen: file.nombreServidor
        }

        axios.post('/vacantes/borrarimagen', params)
          .then(respuesta => console.log(respuesta))
      }
    });
  })
</script>
@endsection
