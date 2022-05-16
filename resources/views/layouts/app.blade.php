<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{-- {{ config('app.name', 'Goierno Regional Huanuco') }}--}}Goierno Regional Huanuco</title> 

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&amp;display=swap" rel="stylesheet"> --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel='stylesheet' href="{{ mix('css/app.css') }}" />
    <style>
     @charset "UTF-8";







/* Tamaño del scroll */
body::-webkit-scrollbar {
  width: 8px;
}

 /* Estilos barra (thumb) de scroll */
body::-webkit-scrollbar-thumb {
  background: #0044a2;
  border-radius: 4px;
}

body::-webkit-scrollbar-thumb:active {
  background-color: #999999;
}

body::-webkit-scrollbar-thumb:hover {
  background: #0dcaf0;
  box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
}

 /* Estilos track de scroll */
 body::-webkit-scrollbar-track {
  background: #e1e1e1;
  border-radius: 4px;
}

body::-webkit-scrollbar-track:hover, 
body::-webkit-scrollbar-track:active {
  background: #d4d4d4;
}


</style>
    
    
</head>
<body>
    <div id="app">
        {{-- @include('layouts.header') --}}
        <App ruta="{{ route('baseruta') }}"></App>

        
       
    </div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
