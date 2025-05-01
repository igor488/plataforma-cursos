@extends('layouts.app')

@section('content')
    <div class="curso-detalhe">
        <h1>{{ $curso->titulo }}</h1>
        <img src="{{ asset('storage/'.$curso->imagem) }}" alt="{{ $curso->titulo }}">
        <p>{{ $curso->descricao }}</p>
        <a href="{{ $curso->link }}" target="_blank">Acessar Curso</a>
    </div>
@endsection
