<!-- resources/views/paciente/index.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 800px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Lista de Pacientes</h2>
            
            <a href="{{ route('pacientes.create') }}" class="btn btn-primary mb-3" style="border-radius: 10px;">Novo Paciente</a>
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Data de Nascimento</th>
                        <th>Telefone</th>
                       
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->nome }}</td>
                            <td>{{ $paciente->endereco }}</td>
                            <td>{{ \Carbon\Carbon::parse($paciente->data_nascimento)->format('d/m/Y') }}</td>
                            <td>{{ $paciente->telefone }}</td>
                           
                            <td>
                    <a href="/paciente/{{ $paciente->id }}" class="btn btn-secondary">
                        Visualizar registro
                    </a>
                    <a href="/paciente/{{ $paciente->id }}/edit" class="btn btn-warning">
                        Editar
                    </a>
                    
                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
