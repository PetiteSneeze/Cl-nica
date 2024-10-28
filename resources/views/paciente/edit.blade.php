<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Editar Paciente</h2>

            <form action="{{ route('pacientes.update', $pacientes->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="nome" style="color: #4a5568; font-weight: 600;">Nome:</label>
                    <input type="text" name="nome" id="nome" value="{{ $pacientes->nome }}" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>

                <div class="form-group mb-3">
                    <label for="endereco" style="color: #4a5568; font-weight: 600;">Endereço:</label>
                    <input type="text" name="endereco" id="endereco" value="{{ $pacientes->endereco }}" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>

                <div class="form-group mb-3">
                    <label for="data_nascimento" style="color: #4a5568; font-weight: 600;">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="{{ $pacientes->data_nascimento }}" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>

                <div class="form-group mb-3">
                    <label for="telefone" style="color: #4a5568; font-weight: 600;">Telefone:</label>
                    <input type="text" name="telefone" id="telefone" value="{{ $pacientes->telefone }}" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>

                <div class="form-group mb-3">
                    <label for="email" style="color: #4a5568; font-weight: 600;">Email:</label>
                    <input type="email" name="email" id="email" value="{{ $pacientes->email }}" class="form-control" required style="border-radius: 10px; border-color: #cbd5e0;">
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px; background-color: #6495ED;">Atualizar Paciente</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
