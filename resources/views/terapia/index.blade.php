<!-- resources/views/terapia/index.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 800px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Lista de Terapias</h2>

            <!-- Tabela de Terapias -->
            <table class="table table-striped">
                <thead style="color: #4a5568; font-weight: 600;">
                    <tr>
                        <th>Paciente</th>
                        <th>Data</th>
                        <th>Técnica</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($terapia as $t)
                    <tr>
                        <td>{{ $t->paciente->nome }}</td>
                        <td>{{ \Carbon\Carbon::parse($t->data)->format('d/m/Y') }}</td>
                        <td>{{ $t->tecnica }}</td>
                        <td>
                            <a href="{{ route('terapia.show', $t->id) }}" class="btn btn-secondary">Visualizar Registro</a>
                            <a href="{{ route('terapia.edit', $t->id) }}"  class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Botão para adicionar nova terapia -->
            <div class="text-center mt-4">
                <a href="{{ route('terapia.create') }}" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px;">Nova Terapia</a>
            </div>
        </div>
    </div>
</x-app-layout>
