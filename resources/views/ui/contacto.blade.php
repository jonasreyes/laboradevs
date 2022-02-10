  <aside class="md:w-2/5 bg-teal-500 m-3 p-5 rounded">
    <h2 class="text-2xl my-5 text-white uppercase font-bold text-center">Contacta al Reclutador</h2>

  <form enctype="multipart/form-data" action="{{ route('candidatos.store') }}" method="post" class="">
    @csrf

      <div class="mb-4">
        <label class="block text-white text-sm font-bold mb-4" for="nombre">Nombre:</label>
        <input id="nombre" name="nombre" type="text" class="p-3 bg-grey-100 rounded form-input w-full @error('error') border border-red-500 @enderror" value="{{ old('nombre') }}" placeholder="Tu Nombre">

        @error('nombre')
        <div class="rounded bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5" role="alert">

          <p>{{ $message }}</p>
        </div>

        @enderror

      </div>

      <div class="mb-4">
        <label class="block text-white text-sm font-bold mb-4" for="email">Email:</label>

        <input id="email" name="email" type="text" class="p-3 bg-grey-100 rounded form-input w-full @error('error') border border-red-500 @enderror" value="{{ old('email') }}" placeholder="Tu Email">

        @error('email')
        <div class="rounded bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5" role="alert">

          <p>{{ $message }}</p>
        </div>

        @enderror

      </div>

      <div class="mb-4">
        <label class="block text-white text-sm font-bold mb-4" for="email">Teléfono:</label>

        <input id="telefono" name="telefono" type="tel" class="p-3 bg-grey-100 rounded form-input w-full @error('error') border border-red-500 @enderror" value="{{ old('telefono') }}" placeholder="Ejem: +584125555555">

        @error('telefono')
        <div class="rounded bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5" role="alert">

          <p>{{ $message }}</p>
        </div>

        @enderror

      </div>

      <div class="mb-4">
        <label class="block text-white text-sm font-bold mb-4" for="cv">Curriculum (PDF):</label>

        <input id="cv" name="cv" type="file" class="p-3 rounded form-input w-full @error('error') border border-red-500 @enderror" accept="application/pdf">

        @error('cv')
        <div class="rounded bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5" role="alert">

          <p>{{ $message }}</p>
        </div>

        @enderror

      </div>

      <input type="hidden" name="vacante_id" value="{{ $vacante->id }}">

      <input type="submit" class="bg-teal-600 w-full hover:bg-teal-700 text-grey-100 p-4 focus:outline-none focus:shadow-outline uppercase" value="Contactar">
    </form>
  </aside>
