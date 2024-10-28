<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Edição de Avaliação</h2>
            <form action="/avaliacao/{{$avaliacao->id}}" method="POST">
                @csrf
                @method('PUT')
                
                <!-- Campo Data da Avaliação -->
                <div class="form-group mb-3">
                    <label for="data_avaliacao" style="color: #4a5568; font-weight: 600;">Data da Avaliação:</label>
                    <input type="date" value="{{$avaliacao->data_avaliacao}}" name="data_avaliacao" id="data_avaliacao" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>
                
                <!-- Campo Observações -->
                <div class="form-group mb-3">
                    <label for="observacoes" style="color: #4a5568; font-weight: 600;">Observações:</label>
                    <textarea name="observacoes" id="observacoes"
                     class="form-control" rows="4" placeholder="Adicione suas observações" style="border-radius: 10px; border-color: #cbd5e0;">{{$avaliacao->observacoes}}</textarea>
                </div>
                
                <!-- Select para selecionar o Paciente -->
                <div class="form-group mb-3">
                    <label for="paciente" style="color: #4a5568; font-weight: 600;">Selecione o Paciente:</label>
                    <select name="paciente_id" id="paciente" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                        <option value="">Selecione um paciente</option>
                        @foreach($pacientes as $p)
                            <option value="{{ $p->id }}" {{ $p->id == $avaliacao->paciente_id ? 'selected' : '' }}>
                                {{ $p->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Botão para enviar o formulário -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px; background-color: #6495ED; border-color: #4a90e2; font-weight: 600;">
                        Editar Avaliação
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
