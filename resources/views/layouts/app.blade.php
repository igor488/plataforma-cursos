<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header style="background-color: #1d1f27; padding: 20px; color: white; display: flex; justify-content: space-between; align-items: center;">
    <h1 style="margin: 0;">Plataforma de Cursos</h1>
    <nav>
        <a href="/" style="margin-right: 20px; color: white; text-decoration: none;">Home</a>
        <a href="#sobre" style="margin-right: 20px; color: white; text-decoration: none;">Sobre Nós</a>
        <a href="#jogos" style="color: white; text-decoration: none;">Jogos</a>
    </nav>
</header>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
