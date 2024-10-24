<x-app-layout>

    <h2>Gerenciar avaliações psicológicas</h2>
    <a href="/encaminhamento/create" class="btn btn-primary">
        Novo Registro
    </a>
    <table class="table table-hover">
        
    <thead>
        <tr>
            <th>Paciente</th>
            <th>Data da Encaminhamento</th>
            <th>Nome do Profissional</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($encaminhamento as $a)
            <tr>
                <td>{{ $a->paciente->nome }}</td>
                <td>{{ \Carbon\Carbon::parse($a->data)->format('d/m/Y') }}</td>
                <td>{{ $a->nome_profissional }}</td>

                <td>
                    <a href="/encaminhamento/{{ $a->id }}" class="btn btn-secondary">
                        Visualizar registro
                    </a>
                    <a href="/encaminhamento/{{ $a->id }}/edit" class="btn btn-warning">
                        Editar
                    </a>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    
</x-app-layout>
