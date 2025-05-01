@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Cadastrar Novo Curso</h2>

        <!-- Exibir mensagens de erro -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulário -->
        <form method="POST" action="{{ route('admin.cursos.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="titulo">Título do Curso</label>
                <input type="text" name="titulo" id="titulo" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" rows="4" required></textarea>
            </div>

            <div class="form-group mt-3">
                <label for="link">Link do Curso</label>
                <input type="url" name="link" id="link" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="imagem">Imagem do Curso</label>
                <input type="file" name="imagem" id="imagem" class="form-control" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Cadastrar Curso</button>
        </form>
    </div>
@endsection
