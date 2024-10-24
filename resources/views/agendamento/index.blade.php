<x-app-layout>

    <h2>Gerenciar Agendamentos</h2>
    <a href="/agendamento/create" class="btn btn-primary">
        Novo Registro
    </a>
    <table class="table table-hover">
        
    <thead>
        <tr>
            <th>Paciente</th>
            <th>Data do Agendamento</th>
            <th>Horário</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($agendamento as $ag)
            <tr>
                <td>{{ $ag->paciente->nome }}</td>
                <td>{{ \Carbon\Carbon::parse($ag->data)->format('d/m/Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($ag->hora)->format('H:i') }}</td>
                <td>
                    <a href="/agendamento/{{$ag->id}}" class="btn btn-secondary">
                        Visualizar registro
                    </a>
                    
                    <a href="/agendamento/{{ $ag->id }}/edit" class="btn btn-warning">
                        Editar
                    </a>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    
</x-app-layout>
