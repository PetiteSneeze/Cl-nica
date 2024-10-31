<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome para o ícone de Home -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMZ7V0iLvYZgt02M4wvYpjoP0U0I8go3w4fzNzM" crossorigin="anonymous">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f0f4f8;
            color: #4a5568;
            overflow-x: hidden;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #6495ED;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            z-index: 1000;
        }

        .sidebar-collapsed {
            transform: translateX(-250px);
        }

        .sidebar .user-welcome {
            font-size: 1.1rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 20px;
        }

        .sidebar .nav-link {
            color: #ffffff;
            font-weight: bold;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .sidebar .nav-link i {
            margin-right: 8px;
        }
        .sidebar .nav-link:hover {
            color: #4a90e2;
        }

        .logout-button {
            margin-top: auto;
            width: 100%;
        }

        /* Conteúdo Principal */
        .content {
            margin-left: 250px;
            padding: 40px;
            transition: margin-left 0.3s ease;
        }
        .content-collapsed {
            margin-left: 0;
        }
        .content-header {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        /* Botão de Hambúrguer */
        .hamburger {
            font-size: 1.8rem;
            cursor: pointer;
            color: #4a5568;
            position: fixed;
            top: 20px;
            left: 270px;
            transition: left 0.3s ease;
            z-index: 1100;
        }
        .hamburger-collapsed {
            left: 20px;
            color: #6495ED;
        }
    </style>
</head>
<body>
    <!-- Botão de Hambúrguer -->
    <div class="hamburger" id="hamburger" onclick="toggleSidebar()">&#9776;</div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <!-- Nome de usuário -->
        <div class="user-welcome" style="color:black">
            Olá, {{ Auth::user()->name }}
        </div>

        <!-- Link para Página Inicial -->
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-home"></i>Início
                </a>
            </li>

            <!-- Links do Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('paciente.index') }}">Pacientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('agendamento.index') }}">Agendamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('avaliacao.index') }}">Avaliação Psicológica</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('diagnostico.index') }}">Diagnósticos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('encaminhamento.index') }}">Encaminhamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('prescricao.index') }}">Prescrições</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('problema.index') }}">Condições</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('terapia.index') }}">Terapias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tratamento.index') }}">Tratamentos</a>
            </li>
        </ul>

        <!-- Botão de Logout -->
        <form method="POST" action="{{ route('logout') }}" class="logout-button">
            @csrf
            <button type="submit" class="btn btn-danger btn-block">
                Sair
            </button>
        </form>
    </div>

    <!-- Conteúdo Principal -->
    <div class="content" id="content">
        <!-- Page Heading -->
        @isset($header)
            <div class="content-header">
                {{ $header }}
            </div>
        @endisset

        <!-- Page Content -->
        <main class="container mt-5">
            {{ $slot }}
        </main>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JS for Sidebar Toggle -->
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            const hamburger = document.getElementById('hamburger');
            
            sidebar.classList.toggle('sidebar-collapsed');
            content.classList.toggle('content-collapsed');
            hamburger.classList.toggle('hamburger-collapsed');
        }
    </script>
</body>
</html>
