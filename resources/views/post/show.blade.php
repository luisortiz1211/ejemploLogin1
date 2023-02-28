@extends('layouts.app')
@section('titulo')
{{$post->title}}
<div class="container">
    <img src="{{asset('uploads').'/'.$post->image}}" alt="">
</div>
@endsection
@section('contenido')

@endsection