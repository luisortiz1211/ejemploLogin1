@extends('layouts.app')
@section('titulo')
Crear una publicación
@endsection

@push('styles')

<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
<div class="md:flex md:items-center">
    <div class="md:w-1/2 px-10">
        <form action="{{route('images.store')}}" method="POST" enctype="multipart/form-data" id="dropzone"
            class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
            @csrf
        </form>
    </div>
    <div class="md:w-1/2 bg-white p-10 rounded-lg shadow-xl mt-10 md:mt-0">
        <form action="{{route('post.store')}}" method="POST" novalidate>
            @csrf

            @if (session('mensaje'))
            <span class="text-red-500">{{session('mensaje')}}</span>
            @endif
            <div class="mb-5">
                <label for="titulo" class="mb-2 block uppercas
            text-gray-500 font-bold">Descripción</label>
                <input type="text" id="title" value="{{old('title')}}" name="title" placeholder="Titulo"
                    class="border p-3 w-full rounded-lg">
                @error('title')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="descripcion" class="mb-2 block uppercas
            text-gray-500 font-bold">Descripción</label>
                <textarea id="description" name="description" class="border p-3 w-full rounded-lg"
                    placeholder="Descripción">{{old('description')}}</textarea>
                @error('description')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-5">
                <input name="image" id="image" type="hidden" value="{{old('image')}}">
                @error('image')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>

            <input type="submit"
                class="w-full bg-sky-600 hover:bg-sky-700 uppercase p-3 text-white rounded-lg transition-colors cursor-pointer font-bold"
                value="Publicar">
        </form>
    </div>
</div>
@endsection