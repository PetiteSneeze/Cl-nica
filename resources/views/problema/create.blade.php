<!-- resources/views/problema/create.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Novo Problema</h2>
            <form action="{{ route('problema.store') }}" method="POST">
                @csrf

                <!-- Campo Paciente -->
                <div class="form-group mb-3">
                    <label for="paciente_id" style="color: #4a5568; font-weight: 600;">Paciente:</label>
                    <select name="paciente_id" id="paciente_id" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;" required>
                        @foreach($pacientes as $paciente)
                            <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Campo Data de Identificação -->
                <div class="form-group mb-3">
                    <label for="data_identificacao" style="color: #4a5568; font-weight: 600;">Data de Identificação:</label>
                    <input type="date" name="data_identificacao" id="data_identificacao" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>

                <!-- Campo Evolução -->
                <div class="form-group mb-3">
                    <label for="evolucao" style="color: #4a5568; font-weight: 600;">Evolução:</label>
                    <textarea name="evolucao" id="evolucao" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;"></textarea>
                </div>

                <!-- Botão para enviar o formulário -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px;">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
