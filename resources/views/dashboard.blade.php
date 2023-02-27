@extends('layouts.app')
@section('titulo')
DashBoard
@endsection
@section('contenido')

<div class="flex justify-center">
    <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
        <div class="md:w-8/12 lg:w-6/12 px-5">
            <p>
                <img src="" alt="imagen-usuario">
            </p>
        </div>
        <div class="md:w-8/12 lg:w-6/12 px-5">
            <p>
                {{auth()->user()->name}}
            </p>
        </div>
    </div>
</div>

@endsection