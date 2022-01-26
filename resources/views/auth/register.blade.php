@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-screen-md">
  <div class="flex flex-wrap justify-center">
    <div class="md:w-1/2 md:order-1 order-2">
      <div class="w-full max-w-sm">
        <div class="flex flex-col mt-20 break-words shadow-md bg-white">
          <div class="px-6 py-3 mb-0 text-center text-grey-700 uppercase bg-grey-300">
            {{ __('Register') }}
          </div>

          <form class="px-5 py-10" method="POST" action="{{ route('register') }}" novalidate>
            @csrf

            <div class="flex flex-wrap mb-6">
              <label for="name" class="block mb-2 text-sm text-grey-700">{{ __('Name') }}</label>

              <input id="name" type="text" class="p-3 bg-grey-200 rounded form-input w-full @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

              @error('name')
              <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="flex flex-wrap mb-6">
              <label for="email" class="block mb-2 text-sm text-grey-700">{{ __('E-Mail Address') }}</label>

              <input id="email" type="email" class="p-3 bg-grey-200 rounded form-input w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

              @error('email')
              <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="flex flex-wrap mb-6">
              <label for="password" class="block mb-2 text-sm text-grey-700">{{ __('Password') }}</label>

              <input id="password" type="password" class="p-3 bg-grey-200 rounded form-input w-full @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

              @error('password')
              <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="flex flex-wrap mb-6">
              <label for="password-confirm" class="block mb-2 text-sm text-grey-700">{{ __('Confirm Password') }}</label>

              <input id="password-confirm" type="password" class="p-3 bg-grey-200 rounded form-input w-full" name="password_confirmation" autocomplete="new-password">
            </div>

            <div class="flex flex-wrap">
              <button type="submit" class="w-full p-3 font-bold text-grey-100 uppercase bg-teal-500 hover:bg-teal-700 focus:outline-none focus:shadow-outline">
                {{ __('Register') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- inicio de la segunda columna de acceso-->
    <div class="md:w-1/2 md:order-2 order-1 text-center flex flex-col justify-center px-10 mt-10">
      <h1 class="font-bold text-teal-500 text-3xl">¿Eres Reclutador?</h1>
      <p class="font-bold text-xl mt-5 leading-7">¡Crea una cuenta totalmente gratis y comienza a publicar hasta 10 vacantes!</p>
    </div>
  </div>
</div>
@endsection
