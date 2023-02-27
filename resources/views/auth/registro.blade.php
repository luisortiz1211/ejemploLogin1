@extends('layouts.app')

@section('titulo')
Crear cuenta
@endsection
@section('contenido')

<div class="md:flex md:justify-center md:gap-4 md:items-center">
    <div class="md:w-4/12 bg-slate-400 rounded-lg shadow-xl">
        <div>
            <img src="#" alt="Imagen">

        </div>
    </div>
    <div class="md:w-4/12 bg-white p-10 rounded-lg shadow-xl">
        <form action="{{route('register.store')}}" method="POST" novalidate>
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercas
            text-gray-500 font-bold">Nombre</label>
                <input type="text" id="name" value="{{old('name')}}" name="name" placeholder="Nombre"
                    class="border p-3 w-full rounded-lg">
                @error('name')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="username" class="mb-2 block uppercas
            text-gray-500 font-bold">Usuario</label>
                <input type="text" id="username" value="{{old('username')}}" name="username" placeholder="Usuario"
                    class="border p-3 w-full rounded-lg">
                @error('username')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercas
            text-gray-500 font-bold">Email</label>
                <input type="email" id="email" value="{{old('email')}}" name="email" placeholder="Email"
                    class="border p-3 w-full rounded-lg">
                @error('email')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercas
            text-gray-500 font-bold">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña"
                    class="border p-3 w-full rounded-lg">
                @error('password')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercas
            text-gray-500 font-bold">Repetir password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    placeholder="Repetir contraseña" class="border p-3 w-full rounded-lg">
            </div>

            <input type="submit"
                class="w-full bg-sky-600 hover:bg-sky-700 uppercase p-3 text-white rounded-lg transition-colors cursor-pointer font-bold"
                value="Crearcuenta">
        </form>
    </div>

</div>
@endsection