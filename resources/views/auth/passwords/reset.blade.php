@extends('layouts.app')

@section('content')
<div class="container mx-auto">
  <div class="flex flex-wrap justify-center">
    <div class="w-full max-w-sm">
      <div class="flex flex-col mt-20 break-words shadow-md bg-white">
        <div class="px-6 py-3 mb-0 text-center text-grey-700 uppercase bg-grey-300" yy>
          {{ __('Reset Password') }}
        </div>

        <form class="px-5 py-10" method="POST" action="{{ route('password.update') }}">
          @csrf

          <input type="hidden" name="token" value="{{ $token }}">

          <div class="flex flex-wrap mb-6">
            <label for="email" class="block mb-2 text-sm text-grey-700">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email" class="p-3 bg-grey-200 rounded form-input w-full @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="flex flex-wrap mb-6">
            <label for="password" class="block mb-2 text-sm text-grey-700">{{ __('Password') }}</label>
            <input id="password" type="password" class="p-3 bg-grey-100 rounded form-input w-full @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

            @error('password')
            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="flex flex-wrap mb-6">
            <label for="password-confirm" class="block mb-2 text-sm text-grey-700">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="p-3 bg-grey-100 rounded form-input w-full" name="password_confirmation" required autocomplete="new-password">

            @error('password-confirm')
            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="flex flex-wrap mb-6">
            <button type="submit" class="w-full p-3 font-bold text-grey-100 uppercase bg-teal-500 hover:bg-teal-700 focus:outline-none focus:shadow-outline">
              {{ __('Reset Password') }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
