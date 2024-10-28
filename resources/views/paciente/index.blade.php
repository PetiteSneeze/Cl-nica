<x-app-layout>
    <div class="container" style="max-width: 800px; margin-top: 40px;">
        <div class="card shadow-sm p-4" style="border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4" style="color: #4a5568;">Lista de Pacientes</h2>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Tabela de Pacientes -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Telefone</th>
                      
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $p)
                        <tr>
                            <td>{{ $p->nome }}</td>
                            <td>{{ \Carbon\Carbon::parse($p->data_nascimento)->format('d/m/Y') }}</td>
                            <td>{{ $p->telefone }}</td>
                            
                            <td>
                                <a href="{{ route('pacientes.show', $p->id) }}" class="btn btn-secondary" class="btn btn-secondary">Visualizar</a>
                                    
                                </a>
                                <a href="{{ route('pacientes.edit', $p->id) }}" class="btn btn-warning"  class="btn btn-warning">Editar</a>
                                    
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center mt-4">
                <a href="{{ route('pacientes.create') }}" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px; background-color: #6495ED;">Novo Paciente</a>
            </div>
        </div>
    </div>

    <!-- Link para Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMZ7V0iLvYZgt02M4wvYpjoP0U0I8go3w4fzNzM" crossorigin="anonymous">
</x-app-layout>
