<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', config('app.name', 'Digitalna Riznica'))</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">
  <div class="flex flex-col min-h-screen">

    {{-- HEADER --}}
    <header class="bg-primary text-white">
      <div class="relative w-full px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-center">
        {{-- Centrirani meni --}}
        <nav class="flex space-x-8">
          <a href="{{ route('home') }}"          class="opacity-75 hover:opacity-100 transition">Početna</a>
          <a href="{{ route('contact') }}"       class="opacity-75 hover:opacity-100 transition">Kontakt</a>
          <a href="{{ route('programs.index') }}"class="opacity-75 hover:opacity-100 transition">Programi potpore</a>
          <a href="{{ route('advices.index') }}" class="opacity-75 hover:opacity-100 transition">Savjeti</a>
          <a href="{{ route('news.index') }}"    class="opacity-75 hover:opacity-100 transition">Novosti</a>
        </nav>

        {{-- Login / Registracija --}}
        <div class="absolute right-4 top-1/2 transform -translate-y-1/2 flex space-x-3">
          @guest
            <a href="{{ route('register') }}"
               class="px-3 py-1.5 bg-accent text-white rounded-md hover:bg-secondary transition">
              Registracija
            </a>
            <a href="{{ route('login') }}"
               class="px-3 py-1.5 bg-secondary text-white rounded-md hover:bg-accent transition">
              Login
            </a>
          @else
            <form method="POST" action="{{ route('logout') }}" class="flex">
              @csrf
              <button type="submit"
                      class="px-3 py-1.5 bg-red-600 text-white rounded-md hover:bg-red-700 transition">
                Logout
              </button>
            </form>
          @endguest
        </div>
      </div>
    </header>

    {{-- MAIN CONTENT --}}
    <main class="flex flex-1 flex-col lg:flex-row w-full px-4 sm:px-6 lg:px-8 py-8 gap-6">



      
   <aside class="w-full lg:w-1/5 bg-white rounded-lg shadow p-4">
     @include('partials.sidebar-left')
   </aside>

      {{-- Središnji content --}}
      <section class="flex-1 bg-white rounded-lg shadow p-6">
        @yield('content')
      </section>


   <aside class="w-full lg:w-1/5 bg-white rounded-lg shadow p-4">
     @include('partials.sidebar-right')
   </aside>
    </main>







    {{-- FOOTER --}}
    <footer class="bg-secondary text-white text-center py-4 mt-auto">
      <div class="w-full px-4 sm:px-6 lg:px-8">
        &copy; {{ date('Y') }} Digitalna Riznica
      </div>
    </footer>
  </div>
  @stack('scripts')
</body>
</html>
