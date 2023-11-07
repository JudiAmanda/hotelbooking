<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Hotel Reservation') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js']) 

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />
<div class="min-h-screen bg-gray-100 relative">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <aside style="height:100%;" class="z-20 bg-black-100 text-black-100 w-1/5 px-2 py-4 absolute">
          
          <div class="max-w-sm mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
    
    <div class="flex flex-col gap-2 pl-2">
    <x-nav-link href="/dashboard" >
                
                Dashboard
               
                  </x-nav-link>
        <hr>
        <x-nav-link href="#" >
               
               Manage Reservations
               
             </x-nav-link>
        <hr>
        <x-nav-link href="#" >
               
               Hotels
               
             </x-nav-link>
        <hr> 

    </div>
</div>
</aside>
 

          <!-- Page Content -->
            <main>
                
                {{ $slot }}
            </main>


        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
