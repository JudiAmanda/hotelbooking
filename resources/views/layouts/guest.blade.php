<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <script src="easy_background/easy_background.js"></script>
    </head>
    <body>


    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            
            @if (Route::has('login'))
                        <div class="w-full sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10
                        bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% ">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                            <a href="/" class="font-semibold text-white hover:text-gray-20 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                            <a href="{{ route('hotels') }}" class="ml-4 font-semibold text-white hover:text-gray-20 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Hotels</a>
                                <a href="{{ route('login') }}" class="ml-4 font-semibold text-white hover:text-gray-20 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:text-gray-20 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
             <!-- Page Heading -->
             @if (isset($header))
                        <header class="bg-white shadow">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif


        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts

                
<script>
        easy_background("#home-slider",

  {
	slide: ["easy_background/img/first-slide.jpg", "easy_background/img/second-slide.jpg", "easy_background/img/third-slide.jpg", "easy_background/img/fourth-slide.jpg", "easy_background/img/fifth-slide.jpg"],

	delay: [2000, 2000, 2000, 2000, 2000]
  }

);
</script>
    </body>
</html>
