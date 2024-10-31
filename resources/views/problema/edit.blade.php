<!-- resources/views/problema/edit.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Editar Problema</h2>
            <form action="{{ route('problema.update', $problema->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Campo Paciente -->
                <div class="form-group mb-3">
                    <label for="paciente_id" style="color: #4a5568; font-weight: 600;">Paciente:</label>
                    <select name="paciente_id" id="paciente_id" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;" required>
                        @foreach($pacientes as $paciente)
                            <option value="{{ $paciente->id }}" {{ $paciente->id == $problema->paciente_id ? 'selected' : '' }}>{{ $paciente->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Campo Data de Identificação -->
                <div class="form-group mb-3">
                    <label for="data_identificacao" style="color: #4a5568; font-weight: 600;">Data de Identificação:</label>
                    <input type="date" name="data_identificacao" id="data_identificacao" value="{{ $problema->data_identificacao }}" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>

                <!-- Campo Evolução -->
                <div class="form-group mb-3">
                    <label for="evolucao" style="color: #4a5568; font-weight: 600;">Evolução:</label>
                    <textarea name="evolucao" id="evolucao" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">{{ $problema->evolucao }}</textarea>
                </div>

                <!-- Campo Evolução -->
                <div class="form-group mb-3">
                    <label for="problema" style="color: #4a5568; font-weight: 600;">Condição:</label>
                    <textarea name="problema" id="problema" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">{{ $problema->problema }}</textarea>
                </div>

                <!-- Botão para atualizar -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px; background-color: #6495ED;">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
