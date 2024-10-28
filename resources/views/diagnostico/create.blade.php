
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Cadastrar Diagnóstico</h2>
            <form action="{{ route('diagnostico.store') }}" method="POST">
                @csrf
                
                <div class="form-group mb-3">
                    <label for="data" style="color: #4a5568; font-weight: 600;">Data da Avaliação:</label>
                    <input type="date" name="data" id="data" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>
                
            
                <div class="form-group mb-3">
                    <label for="descricao" style="color: #4a5568; font-weight: 600;">Observações:</label>
                    <textarea name="descricao" id="descricao" class="form-control" rows="4" placeholder="Adicione sua descrição" style="border-radius: 10px; border-color: #cbd5e0;"></textarea>
                </div>

            
                <div class="form-group mb-3">
                    <label for="diagnostico" style="color: #4a5568; font-weight: 600;">Diagnóstico:</label>
                    <textarea name="diagnostico" id="diagnostico" class="form-control" rows="4" placeholder="Adicione o Diagnostico" style="border-radius: 10px; border-color: #cbd5e0;"></textarea>
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
                    <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px; background-color: #6495ED; border-color: #4a90e2; font-weight: 600;">
                        Cadastrar Diagnóstico
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
