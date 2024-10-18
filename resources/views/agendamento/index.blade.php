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
            <th>Horario</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($agendamento as $ag)
            <tr>
                <td>{{ $ag->data}}</td>
                <td>{{ $ag->hora}}</td>
                <td>{{ $ag->paciente->nome}}</td>
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
</x-app-layout>