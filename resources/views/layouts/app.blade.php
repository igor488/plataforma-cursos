<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .app {
            position: sticky;
            top: 0;
            z-index: 8000;
        }

        .menu-container {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 20px 0;
            transition: all 0.8s ease;
            opacity: 0;
            transform: translateY(-100px);
            z-index: 100;
            font-family: Quicksand, sans-serif;
        }

        .menu-container.loaded {
            opacity: 1;
            transform: translateY(0);
        }

        .menu-container img {
    width: 130px;
    position: absolute;
    left: 50%;
    transform: translate(-50%);
    transition: all 0.5s ease;
    cursor: pointer;
    filter: drop-shadow(0 0 2px black); /* <-- contorno sutil */
}

        .menu-container img:hover {
            width: 150px;
        }

        .menu-container .btn-menu, .sign {
            display: inline;
            padding: 10px 5px;
        }

        .menu-container .btn-menu a, .sign a {
            color: #ccc;
            text-decoration: none;
            text-transform: capitalize;
            padding: .8rem 1rem;
            border-radius: 40px;
            transition: all .5s;
            font-weight: 700;
        }

        .menu-container .btn-menu a:hover {
            color: white;
            background-color: #d11f1f;
            box-shadow: -2px 2px 10px 2px rgba(0, 0, 0, 0.5);
            transform: scale(1.1) rotate(1deg);
        }

        .menu-container.scrolled {
            background-color: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(5px);
            border-bottom: 2px solid #ccc;
        }

        .menu-content-left,
        .menu-content-right {
            display: flex;
            width: 50%;
            justify-content: center;
            align-items: center;
        }

        .sign a {
            color: #fff;
            background-color: #d11f1f;
            border-radius: 10px;
            font-size: 1.1rem;
            margin-left: 10px;
        }

        .sign a:hover {
            color: #d11f1f;
            background-color: #fff;
        }

        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="app">
        <div class="menu-container">
            <ul class="menu-content-left">
                <li class="btn-menu"><a href="/#sobre">Sobre nós</a></li>
                <li class="btn-menu"><a href="/#estudio">O Estúdio</a></li>
                <li class="btn-menu"><a href="/#contato">Contato</a></li>
            </ul>

            <img src="{{ asset('img/icone.png') }}" alt="Ícone do Space Studios" onclick="location.href='/#home'">

            <ul class="menu-content-right">
                <li class="btn-menu"><a href="/news">News</a></li>
                <li class="btn-menu"><a href="/cursos">Cursos</a></li>
                <li class="btn-menu"><a href="/jogos">Jogos</a></li>
                <li class="sign"><a href="/login">Sign Up</a></li>
            </ul>
        </div>
    </div>

    <div class="container mt-5">
        @yield('content')
    </div>

        <!-- Rodapé estilo Vue adaptado para Blade -->
        <footer style="background-image: linear-gradient(to top, #111,#000); padding: 40px 150px; color: white; font-family: Verdana, Geneva, Tahoma, sans-serif;">
        <h2 style="font-size: 1.6rem;">Já deu uma olhada em nossos cursos?</h2>
        <p style="margin: 10px 0 20px;">Temos alguns cursos gratuitos para você engajar no ramo da programação</p>
        <button onclick="window.location='/cursos'" style="background-color: #d11f1f; color: #fff; font-weight: 900; border: none; border-radius: 2px; height: 50px; width: 200px; margin: 20px 0; box-shadow: -1px 1px 2px 1px rgba(0,0,0,.4); cursor: pointer; transition: all .5s;">Ver Cursos</button>

        <hr style="opacity: .2;">

        <div style="display: flex; flex-wrap: wrap; justify-content: space-around; gap: 20px; margin: 20px 0;">
            <div>
                <h3 style="font-size: 1.3rem;">Lets</h3>
                <h2 style="font-size: 1.6rem; color: #fff;">One</h2>
            </div>

            <div>
                <h3 style="color: #d11f1f; font-size: 1rem;">Informações</h3>
                <p><a href="/#estudio" style="color: #fff; text-decoration: none; font-size: .8rem;">O Estúdio</a></p>
                <p><a href="/#sobre" style="color: #fff; text-decoration: none; font-size: .8rem;">Sobre Nós</a></p>
                <p><a href="/news" style="color: #fff; text-decoration: none; font-size: .8rem;">News</a></p>
            </div>

            <div>
                <h3 style="color: #d11f1f; font-size: 1rem;">Diversão e Aprendizado</h3>
                <p><a href="/jogos" style="color: #fff; text-decoration: none; font-size: .8rem;">Jogos</a></p>
                <p><a href="/cursos" style="color: #fff; text-decoration: none; font-size: .8rem;">Cursos</a></p>
                <p><a href="/login" style="color: #fff; text-decoration: none; font-size: .8rem;">Login</a></p>
            </div>

            <div>
                <h3 style="color: #d11f1f; font-size: 1rem;">Contato</h3>
                <p><a href="/#contato" style="color: #fff; text-decoration: none; font-size: .8rem;">Contato</a></p>
                <p><a href="/#contato" style="color: #fff; text-decoration: none; font-size: .8rem;">Nossas Redes</a></p>
            </div>

            <div>
                <h3 style="border-bottom: 3px solid #fff; color: #fff;">Nossas Redes Sociais</h3>
                <button onclick="window.location='/#contato'" style="background-color: #d11f1f; color: #fff; font-weight: 900; border: none; border-radius: 2px; height: 50px; width: 200px; margin: 20px 0; box-shadow: -1px 1px 2px 1px rgba(0,0,0,.4); cursor: pointer; transition: all .5s;">Redes Sociais</button>
            </div>
        </div>

        <hr style="opacity: .2;">

        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; color: #e0e0e0; margin-top: 20px;">
            <p>&copy; {{ date('Y') }} Space <span style="color: #fff;">Studios</span></p>
            <p>Desde 2022</p>
        </div>
    </footer>

    <script>
        window.addEventListener('scroll', () => {
            const bar = document.querySelector('.menu-container');
            if (window.scrollY > 20) {
                bar.classList.add('scrolled');
            } else {
                bar.classList.remove('scrolled');
            }
        });

        window.addEventListener('load', () => {
            const bar = document.querySelector('.menu-container');
            bar.classList.add('loaded');
        });
    </script>
</body>
</html>
