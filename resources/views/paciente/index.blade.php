<!-- resources/views/paciente/index.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 800px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Lista de Pacientes</h2>

            <!-- Tabela de Pacientes -->
            <table class="table table-striped">
                <thead style="color: #4a5568; font-weight: 600;">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Data de Nascimento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $paciente)
                    <tr>
                        <td>{{ $paciente->nome }}</td>
                        <td>{{ $paciente->email }}</td>
                        <td>{{ $paciente->telefone }}</td>
                        <td>{{ \Carbon\Carbon::parse($paciente->data_nascimento)->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('paciente.show', $paciente->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('paciente.edit', $paciente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Botão para criar novo paciente -->
            <div class="text-center mt-4">
                <a href="{{ route('paciente.create') }}" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px;">Novo Paciente</a>
            </div>
        </div>
    </div>
</x-app-layout>
