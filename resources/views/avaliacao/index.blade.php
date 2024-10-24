<x-app-layout>

    <h2>Gerenciar avaliações psicológicas</h2>
    <a href="/avaliacao/create" class="btn btn-primary">
        Novo Registro
    </a>
    <table class="table table-hover">
        
    <thead>
        <tr>
            <th>Paciente</th>
            <th>Data da Avaliação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($avaliacao as $a)
            <tr>
                <td>{{ $a->paciente->nome }}</td>
                <td>{{ \Carbon\Carbon::parse($a->data_avaliacao)->format('d/m/Y') }}</td>
                <td>
                    <a href="/avaliacao/{{ $a->id }}" class="btn btn-secondary">
                        Visualizar registro
                    </a>
                    <a href="/avaliacao/{{ $a->id }}/edit" class="btn btn-warning">
                        Editar
                    </a>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    
</x-app-layout>
