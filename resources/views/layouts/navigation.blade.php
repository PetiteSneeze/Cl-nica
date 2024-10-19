<div class="flex flex-col h-screen bg-gray-100">
    <!-- Cabeçalho -->
    <header class="bg-white shadow-md py-4 px-6">
        <div class="flex justify-between items-center">
            <div class="text-lg font-semibold text-gray-800">Bem-vindo, {{ Auth::user()->name }}</div>
            <div>
                <!-- Menu com Nav Pills -->
                <ul class="nav nav-pills">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Paciente</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Cadastrar</a>
                            <a class="dropdown-item" href="#">Listar</a>
                            <a class="dropdown-item" href="#">Algo mais aqui</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Link isolado</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

   

    <!-- Rodapé -->
   
</div>

<!-- Inclusão de scripts do Bootstrap se necessário -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
