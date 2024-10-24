<!-- resources/views/avaliacao/show.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Detalhes da Avaliação</h2>
            
            <!-- Exibir Data da Avaliação -->
            <div class="form-group mb-3">
                <label for="data_avaliacao" style="color: #4a5568; font-weight: 600;">Data da Avaliação:</label>
                <p id="data_avaliacao" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">
                    {{ \Carbon\Carbon::parse($avaliacao->data_avaliacao)->format('d/m/Y') }}
                </p>
            </div>
            
            <!-- Exibir Observações -->
            <div class="form-group mb-3">
                <label for="observacoes" style="color: #4a5568; font-weight: 600;">Observações:</label>
                <p id="observacoes" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $avaliacao->observacoes }}</p>
            </div>
            
            <!-- Exibir Paciente -->
            <div class="form-group mb-3">
                <label for="paciente" style="color: #4a5568; font-weight: 600;">Paciente:</label>
                <p id="paciente" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $avaliacao->paciente->nome }}</p>
            </div>
            
            <!-- Botão para voltar -->
            <div class="form-group text-center">
                <a href="{{ route('avaliacao.index') }}" class="btn btn-secondary" style="padding: 10px 20px; border-radius: 10px; background-color: #6c757d; border-color: #6c757d; font-weight: 600;">
                    Voltar
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
