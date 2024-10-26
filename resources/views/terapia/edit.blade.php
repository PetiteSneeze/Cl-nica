<!-- resources/views/terapia/edit.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Editar Terapia</h2>
            <form action="{{ route('terapia.update', $terapia->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Campo Paciente -->
                <div class="form-group mb-3">
                    <label for="paciente_id" style="color: #4a5568; font-weight: 600;">Paciente:</label>
                    <select name="paciente_id" id="paciente_id" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;" required>
                        @foreach($pacientes as $paciente)
                            <option value="{{ $paciente->id }}" {{ $paciente->id == $terapia->paciente_id ? 'selected' : '' }}>{{ $paciente->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Campo Data -->
                <div class="form-group mb-3">
                    <label for="data" style="color: #4a5568; font-weight: 600;">Data:</label>
                    <input type="date" name="data" id="data" value="{{ $terapia->data }}" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>

                <!-- Campo Técnica -->
                <div class="form-group mb-3">
                    <label for="tecnica" style="color: #4a5568; font-weight: 600;">Técnica Utilizada:</label>
                    <input type="text" name="tecnica" id="tecnica" value="{{ $terapia->tecnica }}" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>

                <!-- Campo Notas -->
                <div class="form-group mb-3">
                    <label for="notas" style="color: #4a5568; font-weight: 600;">Notas:</label>
                    <textarea name="notas" id="notas" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">{{ $terapia->notas }}</textarea>
                </div>

                <!-- Botão para atualizar -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px;">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
