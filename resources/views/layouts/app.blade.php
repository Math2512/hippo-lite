<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="h-screen flex justify-center" style="background: #edf2f7;">
        <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">    
            @include('layouts.navigation')
        
            <div class="bg-gray-100 w-full font-sans md:ml-64 md:mt-0 mt-14">
                <!-- Page Heading -->
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto pb-6 px-4 sm:px-6 lg:px-8" style="padding-top:1.55rem">
                        {{ $header }}
                    </div>
                </header>
            
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        <div>

        @livewire('livewire-ui-modal')
        @livewireScripts
    </body>
</html>
