<!-- resources/views/tratamento/index.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 800px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Lista de Tratamentos</h2>

            <!-- Tabela de Tratamentos -->
            <table class="table table-striped">
                <thead style="color: #4a5568; font-weight: 600;">
                    <tr>
                        <th>Paciente</th>
                        <th>Data de Início</th>
                        <th>Objetivos</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tratamento as $t)
                    <tr>
                        <td>{{ $t->paciente->nome }}</td>
                        <td>{{ \Carbon\Carbon::parse($t->data_inicio)->format('d/m/Y') }}</td>
                        <td>{{ $t->objetivos }}</td>
                        <td>
                            <a href="{{ route('tratamento.show', $t->id) }}" class="btn btn-secondary">Visualizar</a>
                            <a href="{{ route('tratamento.edit', $t->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Botão para adicionar novo tratamento -->
            <div class="text-center mt-4">
                <a href="{{ route('tratamento.create') }}" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px;background-color: #6495ED;">Novo Tratamento</a>
            </div>
        </div>
    </div>
</x-app-layout>
