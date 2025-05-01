<!DOCTYPE html>
<html>
<head>
    <title>Criar Curso</title>
</head>
<body>
    <h2>Novo Curso</h2>

    @if ($errors->any())
        <div style="color:red;">
            @foreach ($errors->all() as $erro)
                <p>{{ $erro }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('admin.cursos.store') }}">
        @csrf
        <label>Título:</label>
        <input type="text" name="titulo" required><br><br>

        <label>Descrição:</label>
        <textarea name="descricao" required></textarea><br><br>

        <label>Link do curso:</label>
        <input type="text" name="link" required><br><br>

        <label>Imagem (URL):</label>
        <input type="text" name="imagem"><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
