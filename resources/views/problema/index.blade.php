<!-- resources/views/problema/index.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 800px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Lista de Condições</h2>

            <!-- Formulário de Busca -->
            <form method="GET" action="{{ route('problema.index') }}" class="mb-4" id="searchForm">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Buscar por nome do paciente ou data de identificação" value="{{ request('search') }}" id="searchInput">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary" style="background-color: #6495ED;">
                            Buscar
                        </button>
                    </div>
                </div>
            </form>

            <!-- Tabela de Problemas -->
            <table class="table table-striped">
                <thead style="color: #4a5568; font-weight: 600;">
                    <tr>
                        <th>Paciente</th>
                        <th>Data de Identificação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($problema as $p)
                    <tr>
                        <td>{{ $p->paciente->nome }}</td>
                        <td>{{ \Carbon\Carbon::parse($p->data_identificacao)->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('problema.show', $p->id) }}" class="btn btn-secondary">Visualizar</a>
                            <a href="{{ route('problema.edit', $p->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Botão para adicionar novo problema -->
            <div class="text-center mt-4">
                <a href="{{ route('problema.create') }}" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px;background-color: #6495ED;">Novo Problema</a>
            </div>
        </div>
    </div>

    <!-- JavaScript para submeter o formulário quando o campo de busca estiver vazio -->
    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            if (this.value === '') {
                document.getElementById('searchForm').submit();
            }
        });
    </script>
</x-app-layout>