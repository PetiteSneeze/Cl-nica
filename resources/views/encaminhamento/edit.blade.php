<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Editar Encaminhamento</h2>
            <form action="/encaminhamento/{{$encaminhamento->id}}" method="POST">
                @csrf
                @method('PUT')
                
                <!-- Campo Data do Encaminhamento -->
                <div class="form-group mb-3">
                    <label for="data" style="color: #4a5568; font-weight: 600;">Data do Encaminhamento:</label>
                    <input type="date" name="data" value="{{$encaminhamento->data}}" id="data" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>
                
                <!-- Campo Descrição -->
                <div class="form-group mb-3">
                    <label for="descricao" style="color: #4a5568; font-weight: 600;">Descrição:</label>
                    <textarea name="descricao" id="descricao" class="form-control" rows="4" placeholder="Adicione as observações" style="border-radius: 10px; border-color: #cbd5e0;">{{$encaminhamento->descricao}}</textarea>
                </div>

                <!-- Campo Nome do Profissional -->
                <div class="form-group mb-3">
                    <label for="nome_profissional" style="color: #4a5568; font-weight: 600;">Nome do Profissional:</label>
                    <textarea name="nome_profissional" id="nome_profissional" class="form-control" rows="4" placeholder="Adicione o nome do Profissional" style="border-radius: 10px; border-color: #cbd5e0;">{{$encaminhamento->nome_profissional}}</textarea>
                </div>

                <!-- Select para selecionar o Paciente -->
                <div class="form-group mb-3">
                    <label for="paciente" style="color: #4a5568; font-weight: 600;">Selecione o Paciente:</label>
                    <select name="paciente_id" id="paciente" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                        <option value="">Selecione um paciente</option>
                        @foreach($pacientes as $p)
                            <option value="{{ $p->id }}" {{ $p->id == $encaminhamento->paciente_id ? 'selected' : '' }}>
                                {{ $p->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Botão para enviar o formulário -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px; background-color: #6495ED; border-color: #4a90e2; font-weight: 600;">
                        Editar Encaminhamento
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
