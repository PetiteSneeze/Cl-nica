<!-- resources/views/problema/show.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Detalhes do Problema</h2>

            <div class="form-group mb-3">
                <label for="paciente" style="color: #4a5568; font-weight: 600;">Paciente:</label>
                <p id="paciente" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $problema->paciente->nome }}</p>
            </div>

            <div class="form-group mb-3">
                <label for="data_identificacao" style="color: #4a5568; font-weight: 600;">Data de Identificação:</label>
                <p id="data_identificacao" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">
                    {{ \Carbon\Carbon::parse($problema->data_identificacao)->format('d/m/Y') }}
                </p>
            </div>

            <div class="form-group mb-3">
                <label for="evolucao" style="color: #4a5568; font-weight: 600;">Evolução:</label>
                <p id="evolucao" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $problema->evolucao }}</p>
            </div>

            <div class="form-group mb-3">
                <label for="problema" style="color: #4a5568; font-weight: 600;">Condição:</label>
                <p id="problema" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $problema->problema }}</p>
            </div>
            <!-- Botão para voltar -->
            <div class="form-group text-center">
                <a href="{{ route('problema.index') }}" class="btn btn-secondary" style="padding: 10px 20px; border-radius: 10px;">Voltar</a>
            </div>
        </div>
    </div>
</x-app-layout>
