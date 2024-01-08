<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css') 
    <link rel="stylesheet" href="{{ asset('src/css/all.min.js') }}">
</head>
<body class="flex h-screen overflow-hidden">
    <aside id="aside" class="hidden lg:block w-60 h-screen border-r border-bordes">
        <div class="border-b border-bordes h-16 flex items-center justify-center">
            <img src="" alt="">
            <span>logo</span>
        </div>
        <ul class="w-full space-y-2">
            @component('_components.links')
                @slot('route', 'owner.index')
                @slot('icon', 'fa-solid fa-person')
                @slot('text', 'Propietario')
            @endcomponent
            @component('_components.links')
                @slot('route', 'owner.index')
                @slot('icon', 'fa-solid fa-dog')
                @slot('text', 'Mascota')
            @endcomponent
            @component('_components.links')
                @slot('route', 'owner.index')
                @slot('icon', 'fa-solid fa-paw')
                @slot('text', 'Especie')
            @endcomponent
        </ul>
    </aside>
    <div class="flex-grow">
       <nav class="w-full h-16 border-b border-bordes">
            <div class="h-full flex items-center w-10 justify-center">
                <i class="fa-solid fa-bars text-3xl" onclick="toggleHidden()"></i>
            </div>
       </nav>
        @yield('main')
    </div>
</body>
   <script src="{{ asset('src/js/all.min.js') }}"></script> 
   <script src="{{ asset('src/js/scripts.js') }}"></script>
</html>