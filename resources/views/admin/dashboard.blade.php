@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard - Cursos</h2>

    <a href="{{ route('admin.cursos.create') }}" class="btn btn-success mb-3">Cadastrar Novo Curso</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Link</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr>
                <td>{{ $curso->titulo }}</td>
                <td>{{ $curso->descricao }}</td>
                <td><a href="{{ $curso->link }}" target="_blank">Acessar</a></td>
                <td><img src="{{ asset('storage/' . $curso->imagem) }}" width="100"></td>
                <td>
                    <a href="{{ route('admin.cursos.edit', $curso->id) }}" class="btn btn-primary btn-sm">Editar</a>

                    <form action="{{ route('admin.cursos.destroy', $curso->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
