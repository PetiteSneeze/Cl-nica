<!-- resources/views/prescricao/show.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Detalhes da Prescrição</h2>

            <!-- Exibir o Paciente -->
            <div class="form-group mb-3">
                <label for="paciente" style="color: #4a5568; font-weight: 600;">Paciente:</label>
                <p id="paciente" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $prescricao->paciente->nome }}</p>
            </div>

            <!-- Exibir a Descrição da Prescrição -->
            <div class="form-group mb-3">
                <label for="descricao" style="color: #4a5568; font-weight: 600;">Descrição:</label>
                <p id="descricao" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $prescricao->descricao }}</p>
            </div>

            <!-- Exibir a Data da Prescrição -->
            <div class="form-group mb-3">
                <label for="data" style="color: #4a5568; font-weight: 600;">Data:</label>
                <p id="data" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ \Carbon\Carbon::parse($prescricao->data)->format('d/m/Y') }}</p>
            </div>

            <!-- Botão para Voltar -->
            <div class="form-group text-center">
                <a href="{{ route('prescricao.index') }}" class="btn btn-secondary" style="padding: 10px 20px; border-radius: 10px; background-color: #6c757d; border-color: #6c757d; font-weight: 600;">
                    Voltar
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
