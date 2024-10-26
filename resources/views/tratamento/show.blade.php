<!-- resources/views/tratamento/show.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Detalhes do Tratamento</h2>

            <div class="form-group mb-3">
                <label for="paciente" style="color: #4a5568; font-weight: 600;">Paciente:</label>
                <p id="paciente" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $tratamento->paciente->nome }}</p>
            </div>

            <div class="form-group mb-3">
                <label for="data_inicio" style="color: #4a5568; font-weight: 600;">Data de Início:</label>
                <p id="data_inicio" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">
                    {{ \Carbon\Carbon::parse($tratamento->data_inicio)->format('d/m/Y') }}
                </p>
            </div>

            <div class="form-group mb-3">
                <label for="objetivos" style="color: #4a5568; font-weight: 600;">Objetivos:</label>
                <p id="objetivos" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $tratamento->objetivos }}</p>
            </div>

            <div class="form-group mb-3">
                <label for="progresso" style="color: #4a5568; font-weight: 600;">Progresso:</label>
                <p id="progresso" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $tratamento->progresso }}</p>
            </div>

            <div class="text-center">
                <a href="{{ route('tratamento.index') }}" class="btn btn-secondary" style="padding: 10px 20px; border-radius: 10px;">Voltar</a>
            </div>
        </div>
    </div>
</x-app-layout>
