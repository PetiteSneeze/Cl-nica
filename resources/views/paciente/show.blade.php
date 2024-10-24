<!-- resources/views/paciente/show.blade.php -->
<x-app-layout>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Detalhes do Paciente</h2>

            <!-- Exibir Nome -->
            <div class="form-group mb-3">
                <label for="nome" style="color: #4a5568; font-weight: 600;">Nome do Paciente:</label>
                <p id="nome" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $pacientes->nome }}</p>
            </div>

            <!-- Exibir Endereço -->
            <div class="form-group mb-3">
                <label for="endereco" style="color: #4a5568; font-weight: 600;">Endereço:</label>
                <p id="endereco" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $pacientes->endereco }}</p>
            </div>

            <!-- Exibir Data de Nascimento -->
            <div class="form-group mb-3">
                <label for="data_nascimento" style="color: #4a5568; font-weight: 600;">Data de Nascimento:</label>
                <p id="data_nascimento" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">
                    {{ \Carbon\Carbon::parse($pacientes->data_nascimento)->format('d/m/Y') }}
                </p>
            </div>

            <!-- Exibir Telefone -->
            <div class="form-group mb-3">
                <label for="telefone" style="color: #4a5568; font-weight: 600;">Telefone:</label>
                <p id="telefone" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $pacientes->telefone }}</p>
            </div>

            <!-- Exibir Email -->
            <div class="form-group mb-3">
                <label for="email" style="color: #4a5568; font-weight: 600;">Email:</label>
                <p id="email" class="form-control" style="border-radius: 10px; border-color: #cbd5e0;">{{ $pacientes->email }}</p>
            </div>

            <!-- Botão para voltar -->
            <div class="form-group text-center">
                <a href="{{ route('paciente.index') }}" class="btn btn-secondary" style="padding: 10px 20px; border-radius: 10px; background-color: #6c757d; border-color: #6c757d; font-weight: 600;">
                    Voltar
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
