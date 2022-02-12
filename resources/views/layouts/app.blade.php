<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- otros estilos -->
  @yield('styles')

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="min-h-screen leading-none bg-grey-200">

  @if(session('estado'))
    <div class="bg-teal-500 p-8 text-center text-white font-bold uppercase shadow">
      <span class="material-icons md-36">check_circle_outline</span>
      {{ session('estado') }}
    </div>

  @endif

  <div id="app">
    <nav class="py-6 bg-grey-800 shadow-md">
      <div class="container mx-auto px-2">
        <div class="flex items-center justify-around">

          <a class="text-2xl text-white" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
          </a>

          <nav class="flex-1 text-right">

            <!-- Right Side Of Navbar -->
            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <a class="p-3 text-white no-underline hover:underline hover:text-grey-300" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif

            @if (Route::has('register'))
            <span class="text-grey-300 text-sm pr-4">
              <a class="p-3 text-white no-underline hover:underline hover:text-grey-300" href="{{ route('register') }}">{{ __('Register') }}</a>
            </span>
            @endif
            @else
            <span class="pr-4 text-sm text-grey-300">{{ Auth::user()->name }}</span>

              <a 
                class="notifications rounded-full mr-2 px-3 py-2 text-sm {{ (Auth::user()->unreadNotifications()->count() == 0) ? 'text-white bg-teal-500' : 'bg-white text-red-800 font-bold'}}" 
                href="{{ route('notificaciones') }}"
              ><span class="material-icons md-12 mr-1 mb-1">{{ (Auth::user()->unreadNotifications()->count() == 0) ? 'notifications_none' : 'notifications'}}</span>{{ Auth::user()->unreadNotifications()->count() }}</a>


            <span class="text-grey-300 text-sm pr-4">
              <a class="p-3 text-sm text-grey-300 no-underline hover:underline" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
            </span>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
            @endguest
          </nav>
        </div>
      </div>
    </nav>
    <div class="bg-grey-700">
      <nav class="container mx-auto flex space-x-1">
        @yield('navegacion')
      </nav>
    </div>

    <main class="py-4 mt-10 container mx-auto">
      @yield('content')
    </main>
  </div>
  <!-- otros scripts  -->
  @yield('scripts')

</body>

</html>
