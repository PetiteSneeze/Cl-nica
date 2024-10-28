<x-app-layout>
    <div class="container" style="max-width: 800px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Lista de Agendamentos</h2>

            @if (session('insercao'))
                <div class="alert alert-success">
                    {{ session('insercao') }}
                </div>
            @elseif (session('atualizacao'))
                <div class="alert alert-success">
                    {{ session('atualizacao') }}
                </div>
            @endif

            <table class="table table-striped">
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
                                <a href="{{ route('agendamento.show', $ag->id) }}" class="btn btn-secondary">
                                    Visualizar
                                </a>
                                <a href="{{ route('agendamento.edit', $ag->id) }}" class="btn btn-warning">
                                    Editar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center mt-4">
                <a href="{{ route('agendamento.create') }}" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px;background-color: #6495ED; ">Novo Agendamento</a>
            </div>
        </div>
    </div>
</x-app-layout>
