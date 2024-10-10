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
            <th>Observações</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($avaliacoes as $a)
            <tr>
                <td>{{ $a->data_avaliacao}}</td>
                <td>{{ $a->paciente->nome}}</td>
                <td>
                    <a href="/avaliacao/{{$a->id}}" class="btn btn-secondary">
                        Visualizar registro
                    </a>
                    <a href="/avaliacao/{{ $a->id }}/edit" class="btn btn-warning">
                        Editar
                    </a>
                    
                </td>
            </tr>
        @endforeach
</x-app-layout>