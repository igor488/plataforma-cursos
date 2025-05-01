<!DOCTYPE html>
<html>
<head>
    <title>Login do Administrador</title>
</head>
<body>
    <h2>Login do Administrador</h2>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Senha:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Entrar</button>
    </form>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $erro)
                <p style="color:red;">{{ $erro }}</p>
            @endforeach
        </div>
    @endif
</body>
</html>
