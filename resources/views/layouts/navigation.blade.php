<div class="flex flex-col h-screen bg-gray-100">
    <!-- Cabeçalho -->
    <header class="bg-white shadow-md py-4 px-6">
        <div class="flex justify-between items-center">
            <!-- Nome de usuário à esquerda -->
            <div class="text-lg font-semibold text-gray-800">Bem-vindo, {{ Auth::user()->name }}</div>

            <!-- Menu centralizado -->
            <div class="w-full flex justify-center">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link text-black font-bold" href="{{ route('agendamento.index') }}" style="color:black">Agendamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black font-bold" href="{{ route('avaliacao.index') }}" style="color:black">Avaliação Psicológica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black font-bold" href="{{ route('diagnostico.index') }}" style="color:black">Diagnósticos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black font-bold" href="{{ route('encaminhamento.index') }}" style="color:black">Encaminhamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black font-bold" href="{{ route('prescricao.index') }}" style="color:black">Prescrições</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black font-bold" href="{{ route('problema.index') }}" style="color:black">Problemas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black font-bold" href="{{ route('terapia.index') }}" style="color:black">Terapias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black font-bold" href="{{ route('tratamento.index') }}" style="color:black">Tratamentos</a>
                    </li>
                </ul>
            </div>

            <!-- Botão Sair à direita -->
            <div class="ml-auto">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        Sair
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Inclusão de scripts do Bootstrap se necessário -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Estilo adicional para o layout -->
    <style>
        .ml-auto {
            margin-left: auto;
            display: flex;
            align-items: center;
        }
        header {
            position: relative;
            z-index: 1;
        }
    </style>
</div>
