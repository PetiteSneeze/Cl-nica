<!-- resources/views/agendamento/edit.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Edição de Agendamento</h2>
            <form action="/agendamento/{{$agendamento->id}}" method="POST">
                @csrf
                @method('PUT')
             
                <!-- Campo Data do Agendamento -->
                <div class="form-group mb-3">
                    <label for="data" style="color: #4a5568; font-weight: 600;">Data do Agendamento:</label>
                    <input type="date" value="{{ $agendamento->data }}" name="data" id="data" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>
                
                <!-- Campo Hora do Agendamento -->
                <div class="form-group mb-3">
                    <label for="hora" style="color: #4a5568; font-weight: 600;">Hora do Agendamento:</label>
                    <input type="time" value="{{ $agendamento->hora }}" name="hora" id="hora" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>
                
                <!-- Select para selecionar o Paciente -->
                <div class="form-group mb-3">
                    <label for="paciente" style="color: #4a5568; font-weight: 600;">Selecione o Paciente:</label>
                    <select name="paciente_id" id="paciente" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                        <option value="">Selecione um paciente</option>
                        @foreach($pacientes as $p)
                            <option value="{{ $p->id }}" {{ $p->id == $agendamento->paciente_id ? 'selected' : '' }}>
                                {{ $p->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Botão para enviar o formulário -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px; background-color: #6495ED; border-color: #4a90e2; font-weight: 600;">
                        Atualizar Agendamento
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
