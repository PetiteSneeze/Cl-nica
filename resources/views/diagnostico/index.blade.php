<x-app-layout>

    <h2>Gerenciar Diagnósticos</h2>
    <a href="/diagnostico/create" class="btn btn-primary">
        Novo Registro
    </a>
    <table class="table table-hover">
        
    <thead>
        <tr>
            <th>Paciente</th>
            <th>Data do Diagnostico</th>
            <th>Horário</th>
            <th>Diagnóstico</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($diagnostico as $ag)
            <tr>
                <td>{{ $ag->paciente->nome }}</td>
                <td>{{ \Carbon\Carbon::parse($ag->data)->format('d/m/Y') }}</td>
                <td>{{$ag->diagnostico}}</td>
                <td>
                    <a href="/diagnostico/{{$ag->id}}" class="btn btn-secondary">
                        Visualizar registro
                    </a>
                    
                    <a href="/diagnostico/{{ $ag->id }}/edit" class="btn btn-warning">
                        Editar
                    </a>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    
</x-app-layout>
