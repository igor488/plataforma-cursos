@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Curso</h2>

    <form method="POST" action="{{ route('admin.cursos.update', $curso->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" value="{{ $curso->titulo }}" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" class="form-control" rows="4" required>{{ $curso->descricao }}</textarea>
        </div>

        <div class="form-group mt-3">
            <label for="link">Link</label>
            <input type="url" name="link" value="{{ $curso->link }}" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label for="imagem">Imagem (opcional)</label>
            <input type="file" name="imagem" class="form-control">
            <p class="mt-2">Imagem atual: <img src="{{ asset('storage/' . $curso->imagem) }}" width="100"></p>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Atualizar</button>
    </form>
</div>
@endsection
