<!-- resources/views/agendamento/show.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Detalhes do Agendamento</h2>
            
            <!-- Exibir Data do Agendamento -->
            <div class="form-group mb-3">
                <label for="data" style="color: #4a5568; font-weight: 600;">Data do Agendamento:</label>
                <p class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ \Carbon\Carbon::parse($agendamento->data)->format('d/m/Y') }}</p>
            </div>
            
            <!-- Exibir Hora do Agendamento -->
            <div class="form-group mb-3">
                <label for="hora" style="color: #4a5568; font-weight: 600;">Hora do Agendamento:</label>
                <p class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ \Carbon\Carbon::parse($agendamento->hora)->format('H:i') }}</p>
            </div>
            
            <!-- Exibir Paciente -->
            <div class="form-group mb-3">
                <label for="paciente" style="color: #4a5568; font-weight: 600;">Paciente:</label>
                <p class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $agendamento->paciente->nome }}</p>
            </div>
            
            <!-- Botão para voltar -->
            <div class="form-group text-center">
                <a href="{{ route('agendamento.index') }}" class="btn btn-secondary" style="padding: 10px 20px; border-radius: 10px; background-color: #6c757d; border-color: #6c757d; font-weight: 600;">
                    Voltar
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
