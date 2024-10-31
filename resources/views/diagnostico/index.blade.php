<x-app-layout>
    <div class="container" style="max-width: 800px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Lista de Diagnósticos</h2>

            @if (session('insercao'))
                <div class="alert alert-success">
                    {{ session('insercao') }}
                </div>
            @elseif (session('atualizacao'))
                <div class="alert alert-success">
                    {{ session('atualizacao') }}
                </div>
            @endif

            <!-- Formulário de Busca -->
            <form method="GET" action="{{ route('diagnostico.index') }}" class="mb-4" id="searchForm">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Buscar por nome do paciente" value="{{ request('search') }}" id="searchInput">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary" style="background-color: #6495ED;">
                            Buscar
                        </button>
                    </div>
                </div>
            </form>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Paciente</th>
                        <th>Data do Diagnóstico</th>
                        <th>Diagnóstico</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($diagnostico as $diag)
                        <tr>
                            <td>{{ $diag->paciente->nome }}</td>
                            <td>{{ \Carbon\Carbon::parse($diag->data)->format('d/m/Y') }}</td>
                            <td>{{ $diag->diagnostico }}</td>
                            <td>
                                <a href="{{ route('diagnostico.show', $diag->id) }}" class="btn btn-secondary">Visualizar</a>
                                <a href="{{ route('diagnostico.edit', $diag->id) }}" class="btn btn-warning">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center mt-4">
                <a href="{{ route('diagnostico.create') }}" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px; background-color: #6495ED;">Novo Diagnóstico</a>
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
