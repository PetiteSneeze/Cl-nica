<!-- resources/views/terapia/show.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Detalhes da Terapia</h2>

            <div class="form-group mb-3">
                <label for="paciente" style="color: #4a5568; font-weight: 600;">Paciente:</label>
                <p id="paciente" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $terapia->paciente->nome }}</p>
            </div>

            <div class="form-group mb-3">
                <label for="data" style="color: #4a5568; font-weight: 600;">Data:</label>
                <p id="data" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">
                    {{ \Carbon\Carbon::parse($terapia->data)->format('d/m/Y') }}
                </p>
            </div>

            <div class="form-group mb-3">
                <label for="tecnica" style="color: #4a5568; font-weight: 600;">Técnica Utilizada:</label>
                <p id="tecnica" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $terapia->tecnica }}</p>
            </div>

            <div class="form-group mb-3">
                <label for="notas" style="color: #4a5568; font-weight: 600;">Notas:</label>
                <p id="notas" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $terapia->notas }}</p>
            </div>

            <!-- Botão para voltar -->
            <div class="text-center">
                <a href="{{ route('terapia.index') }}" class="btn btn-secondary" style="padding: 10px 20px; border-radius: 10px;">Voltar</a>
            </div>
        </div>
    </div>
</x-app-layout>
