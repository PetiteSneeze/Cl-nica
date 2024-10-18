<x-app-layout>
    <div class="container">
        <h2>Cadastrar Agendamento</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulário para cadastrar um novo agendamento -->
        <form action="{{ route('agendamento.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="data">Data do Agendamento:</label>
                <input type="date" name="data" id="data" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="hora">Hora do Agendamento:</label>
                <input type="time" name="hora" id="hora" class="form-control" required>
            </div>
            
            <!-- Select para selecionar o Paciente -->
        <div class="form-group">
            <label for="paciente">Selecione o Paciente:</label>
            <select name="paciente_id" id="paciente" class="form-control" required>
                <option value="">Selecione um paciente</option>
                @foreach($pacientes as $pa)
                    <option value="{{ $pa->id }}">{{$pa->nome}}</option>
                @endforeach
            </select>
        </div>
        

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Cadastrar Agendamento</button>
            </div>
        </form>
    </div>
</x-app-layout>
