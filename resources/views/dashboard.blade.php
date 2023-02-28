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
<section class="container mx-auto mt-10">
    <h2 class="tex-4xl text-center font-black my-10">Publicaciones</h2>
    @if ($posts->count())

    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($posts as $post)
        <div>
            <a href="{{route('post.show',$post)}}">
                <img src="{{asset('uploads').'/'.$post->image}}" alt="Imagen del post{{$post->title}}">
            </a>
        </div>
        @endforeach
    </div>
    <div class="my-10">
        {{$posts->links()}}
    </div>

    @else
    <p class="text-gray-600 uppercase text-sm text-center font-bold">NO hay post que mostrar</p>
    @endif

</section>


@endsection