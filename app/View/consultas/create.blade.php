<body>
    <div class="container">
        <h1>Nova Consulta</h1>
        <form action="{{ route('consultas.store') }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
            @csrf
            <div class="form-group">
                <label for="data">Data:</label>
                <input type="date" name="data">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('consultas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>