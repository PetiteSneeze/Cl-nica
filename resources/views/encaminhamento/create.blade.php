
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Cadastrar Encaminhamento</h2>
            <form action="{{ route('encaminhamento.store') }}" method="POST">
                @csrf
                
                <div class="form-group mb-3">
                    <label for="data" style="color: #4a5568; font-weight: 600;">Data do Encaminhamento:</label>
                    <input type="date" name="data" id="data" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>
                
            
                <div class="form-group mb-3">
                    <label for="descricao" style="color: #4a5568; font-weight: 600;">Descrição:</label>
                    <textarea name="descricao" id="descricao" class="form-control" rows="4" placeholder="Adicione sua descrição" style="border-radius: 10px; border-color: #cbd5e0;"></textarea>
                </div>

            
                <div class="form-group mb-3">
                    <label for="nome_profissional" style="color: #4a5568; font-weight: 600;">Nome do Profissional:</label>
                    <textarea name="nome_profissional" id="nome_profissional" class="form-control" rows="4" placeholder="Adicione o nome do Profissional" style="border-radius: 10px; border-color: #cbd5e0;"></textarea>
                </div>
                
              
                <div class="form-group mb-3">
                    <label for="paciente" style="color: #4a5568; font-weight: 600;">Selecione o Paciente:</label>
                    <select name="paciente_id" id="paciente" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                        <option value="">Selecione um paciente</option>
                        @foreach($pacientes as $p)
                            <option value="{{ $p->id }}">{{ $p->nome }}</option>
                        @endforeach
                    </select>
                </div>
                

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px; background-color: #4a90e2; border-color: #4a90e2; font-weight: 600;">
                        Cadastrar Encaminhamento
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
