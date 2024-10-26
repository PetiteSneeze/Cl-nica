<!-- resources/views/tratamento/edit.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Editar Tratamento</h2>
            <form action="{{ route('tratamento.update', $tratamento->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Campo Paciente -->
                <div class="form-group mb-3">
                    <label for="paciente_id" style="color: #4a5568; font-weight: 600;">Paciente:</label>
                    <select name="paciente_id" id="paciente_id" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;" required>
                        @foreach($pacientes as $paciente)
                            <option value="{{ $paciente->id }}" {{ $paciente->id == $tratamento->paciente_id ? 'selected' : '' }}>{{ $paciente->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Campo Data de Início -->
                <div class="form-group mb-3">
                    <label for="data_inicio" style="color: #4a5568; font-weight: 600;">Data de Início:</label>
                    <input type="date" name="data_inicio" id="data_inicio" value="{{ $tratamento->data_inicio }}" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>

                <!-- Campo Objetivos -->
                <div class="form-group mb-3">
                    <label for="objetivos" style="color: #4a5568; font-weight: 600;">Objetivos:</label>
                    <textarea name="objetivos" id="objetivos" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">{{ $tratamento->objetivos }}</textarea>
                </div>

                <!-- Campo Progresso -->
                <div class="form-group mb-3">
                    <label for="progresso" style="color: #4a5568; font-weight: 600;">Progresso:</label>
                    <textarea name="progresso" id="progresso" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $tratamento->progresso }}</textarea>
                </div>

                <!-- Botão para atualizar -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px;">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
