@extends('layouts.base')

@section('title')
    Home
@endsection

@section('content')

@if(auth()->check())
    <meta http-equiv="refresh" content="0; {{ route('app.index') }}" />
@else

    <div class="flex flex-col items-center justify-center w-full mx-auto space-y-8">
        <h1 class="text-blue-600 text-4xl font-extrabold"> ¡Bienvenido! </h1>
        <h2 class="text-2xl font-extrabold">Seleccione una de las opciones para comenzar. </h2>
        <div class="my-1">
            <a href="{{ route('login') }}">
                <button class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Iniciar Sesión</button></a>
            <a href="{{ route('register') }}"><button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Crear una cuenta</button></a>
            <a href="{{ route('contacto') }}"><button class="text-white bg-gradient-to-br from-green-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Contacto</button></a>
        </div>
        </div>
    </div>
@endif


@endsection
