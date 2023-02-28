@extends('layouts.app')
@section('titulo')
{{$user->username}}
@endsection
@section('contenido')

<div class="flex justify-center">
    <div class="w-full md:w-8/12 lg:w-6/12 flex md:flex-row items-center">
        <div class="w-8/12 lg:w-6/12 px-5">

            <img src="{{asset('img/usuario.png')}}" alt="imagen-usuario">

        </div>
        <div class="md:w-8/12 
        lg:w-6/12 px-5 flex flex-col items-center md:justify-center py-10 md:py-10 md:items-start ">
            <p class="text-gray-700 text-2xl">
                {{$user->username}}
            </p>
            <p class="text-gray-700 text-2xl">
                Publicaciones
            </p>

        </div>
    </div>
</div>

@endsection