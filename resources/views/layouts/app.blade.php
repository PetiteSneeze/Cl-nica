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

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f0f4f8;
            color: #4a5568;
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color:#6495ED	 ; /* Azul claro */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .sidebar .user-welcome {
            font-size: 1.1rem;
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 20px;
        }
        .sidebar .nav-link {
            color: black;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .sidebar .nav-link:hover {
            color: #4a90e2;
        }
        .logout-button {
            margin-top: auto;
            width: 100%;
        }
        .content {
            margin-left: 250px;
            padding: 40px;
            width: calc(100% - 250px);
        }
        .content-header {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="font-sans bg-light">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Nome de usuário -->
        <div class="user-welcome" style="color: black;">
            Bem-vindo, {{ Auth::user()->name }}
        </div>

        <!-- Links do Menu -->
        <ul class="nav flex-column">
        <li class="nav-item">
                <a class="nav-link" href="{{ route('paciente.index') }}"style="color:#ffffff">Pacientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('agendamento.index') }}"style="color:#ffffff">Agendamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('avaliacao.index') }}"style="color:#ffffff">Avaliação Psicológica</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('diagnostico.index') }}"style="color:#ffffff">Diagnósticos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('encaminhamento.index') }}"style="color:#ffffff">Encaminhamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('prescricao.index') }}"style="color:#ffffff">Prescrições</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('problema.index') }}"style="color:#ffffff">Problemas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('terapia.index') }}"style="color:#ffffff">Terapias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tratamento.index') }}" style="color:#ffffff">Tratamentos</a>
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
    <div class="content">
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
</body>
</html>
