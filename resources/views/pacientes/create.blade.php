<body>
    <div class="container">
        <h1>Novo Paciente</h1>
        <form action="{{ route('pacientes.store') }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name">
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="number" name="cpf">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="number" name="telefone">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>