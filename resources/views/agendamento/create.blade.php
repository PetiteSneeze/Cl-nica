<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Cadastrar Agendamento</h2>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('agendamento.store') }}" method="POST">
                @csrf
                
                <!-- Campo Data do Agendamento -->
                <div class="form-group mb-3">
                    <label for="data" style="color: #4a5568; font-weight: 600;">Data do Agendamento:</label>
                    <input type="date" name="data" id="data" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>
                
                <!-- Campo Hora do Agendamento -->
                <div class="form-group mb-3">
                    <label for="hora" style="color: #4a5568; font-weight: 600;">Hora do Agendamento:</label>
                    <input type="time" name="hora" id="hora" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>
                
                <!-- Select para selecionar o Paciente -->
                <div class="form-group mb-3">
                    <label for="pacientes" style="color: #4a5568; font-weight: 600;">Selecione o Paciente:</label>
                    <select name="paciente_id" id="paciente" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                        <option value="">Selecione um paciente</option>
                        @foreach($pacientes as $p)
                            <option value="{{ $p->id }}">{{ $p->nome }}</option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Botão para enviar o formulário -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px; background-color: #4a90e2; border-color: #4a90e2; font-weight: 600;">
                        Cadastrar Agendamento
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
