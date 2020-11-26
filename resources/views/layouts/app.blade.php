<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ strtolower($env['title']) ?? '<Fill In Title>' }} :: mini[casty]</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body class="antialiased">

    <div class="w-auto">
        <div>
            @if (isset($env) && $env['navbar'] == true)
            <nav class="bg-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <a href="{{ route('home') }}">
                                    <svg class="h-16 w-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 541.78 127.33"><defs><style>.cls-1{font-size:109.67px;fill:#fff;font-family:Cy-Light, Cy;font-weight:300;}.cls-2{letter-spacing:-0.02em;}.cls-3{letter-spacing:0em;}.cls-4{letter-spacing:0em;}</style></defs><text class="cls-1" transform="translate(0 95.97)">mini<tspan class="cls-2" x="205.09" y="0">[</tspan><tspan class="cls-3" x="232.84" y="0">c</tspan><tspan class="cls-4" x="294.25" y="0">asty]</tspan></text></svg>
                                </a>
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <a href="{{ route('dashboard') }}" class="px-3 py-2 rounded-md text-sm font-medium @if(Route::is('dashboard')) text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 @else text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 @endif">dashboard</a>
                                    <a href="{{ route('episodes') }}" class="px-3 py-2 rounded-md text-sm font-medium @if(Route::is('episodes')) text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 @else text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 @endif">episodes</a>
                                    <a href="#" class="px-3 py-2 rounded-md text-sm font-medium @if(Route::is('pages')) text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 @else text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 @endif">pages</a>
                                    <a href="{{ route('settings') }}" class="px-3 py-2 rounded-md text-sm font-medium @if(Route::is('settings')) text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 @else text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 @endif">settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold leading-tight text-gray-900">
                        {{ strtolower($env['title']) ?? '<Fill In Title>' }}
                    </h1>
                </div>
            </header>
            @endif
            <main>
                @yield('content')
            </main>
        </div>
    </div>

    @livewireScripts
</body>
</html>
