<body>
    <div class="container">
        <h1>Novo Exame</h1>
        <form action="{{ route('exames.store') }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
            @csrf
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" name="tipo">
            </div>
            <div class="form-group">
                <label for="resultado">Resultado:</label>
                <input type="text" name="resultado">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('exames.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>