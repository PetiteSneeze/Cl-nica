<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clínica de Psicologia</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: Figtree, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
        }

        header {
            margin-bottom: 40px;
        }

        header img {
            width: 150px; /* Tamanho do logo */
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 2.5rem;
            color: #4a90e2;
            margin-bottom: 20px;
        }

        .navbar {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .navbar a {
            color: #4a90e2;
            text-decoration: none;
            padding: 10px 20px;
            border: 1px solid #4a90e2;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #4a90e2;
            color: #fff;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: #4a90e2;
        }
    </style>
</head>
<body>

    <div class="container">
    <header>
    <img src="https://psicologosvilaolimpia.com.br/wp-content/uploads/2020/06/cropped-Psicologos-Vila-Olimpia-Icon.png" alt="Logo da Clínica de Psicologia">
    <h1>Bem-vindo à Clínica de Psicologia Toledo</h1>
</header>

        <nav class="navbar">
            @if (Route::has('login'))
                <a href="{{ route('login') }}">Entrar</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Cadastre-se</a>
                @endif
            @endif
        </nav>

        <footer>
            © 2024 Clínica de Psicologia. Todos os direitos reservados.
        </footer>
    </div>

</body>
</html>
