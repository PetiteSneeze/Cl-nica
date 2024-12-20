<!-- resources/views/prescricao/edit.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Editar Prescrição</h2>
            <form action="{{ route('prescricao.update', $prescricao->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Campo Paciente -->
                <div class="form-group mb-3">
                    <label for="paciente_id" style="color: #4a5568; font-weight: 600;">Paciente:</label>
                    <select name="paciente_id" id="paciente_id" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                        @foreach($pacientes as $paciente)
                            <option value="{{ $paciente->id }}" {{ $prescricao->paciente_id == $paciente->id ? 'selected' : '' }}>{{ $paciente->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Campo Descrição -->
                <div class="form-group mb-3">
                    <label for="descricao" style="color: #4a5568; font-weight: 600;">Descrição da Prescrição:</label>
                    <textarea name="descricao" id="descricao" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">{{ $prescricao->descricao }}</textarea>
                </div>

                <!-- Campo Data -->
                <div class="form-group mb-3">
                    <label for="data" style="color: #4a5568; font-weight: 600;">Data:</label>
                    <input type="date" name="data" id="data" value="{{ $prescricao->data }}" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>

                <!-- Botão para enviar o formulário -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px; background-color: #6495ED; border-color: #4a90e2; font-weight: 600;">
                        Atualizar Prescrição
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
