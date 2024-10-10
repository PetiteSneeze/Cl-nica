<!-- resources/views/avaliacao/create.blade.php -->
<x-app-layout>
<div class="container">
    <h2>Cadastrar Avaliação</h2>
    <form action="{{ route('avaliacao.store') }}" method="POST">
        @csrf
        
        <!-- Campo Data da Avaliação -->
        <div class="form-group">
            <label for="data_avaliacao">Data da Avaliação:</label>
            <input type="date" name="data_avaliacao" id="data_avaliacao" class="form-control" required>
        </div>
        
        <!-- Campo Observações -->
        <div class="form-group">
            <label for="observacoes">Observações:</label>
            <textarea name="observacoes" id="observacoes" class="form-control" rows="4" placeholder="Adicione suas observações"></textarea>
        </div>
        
        <!-- Select para selecionar o Paciente -->
        <div class="form-group">
            <label for="paciente">Selecione o Paciente:</label>
            <select name="paciente_id" id="paciente" class="form-control" required>
                <option value="">Selecione um paciente</option>
                @foreach($pacientes as $p)
                    <option value="{{ $p->id }}">{{$p->nome}}</option>
                @endforeach
            </select>
        </div>
        
        <!-- Botão para enviar o formulário -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Cadastrar Avaliação</button>
        </div>
    </form>
</div>
</x-app-layout>
