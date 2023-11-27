<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nova(o) Secretária(o)</title>
        <style>
            body {
                background-color: #fff; /* Fundo branco */
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
            }
            .form-group {
                margin-bottom: 15px;
            }
            label {
                display: block;
                font-weight: bold;
            }
            input[type="text"],
            input[type="number"],
            input[type="email"],
            input[type="password"] {
                width: 100%;
                padding: 8px;
                border: 1px solid #3a0d0d;
                border-radius: 4px;
            }
            .btn {
                padding: 10px 15px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                color: #fff;
            }
            .btn-success {
                background-color: #28a745;
            }
            .btn-secondary {
                background-color: #6c757d;
            }
        </style>
    </head>
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
            <div class="form-group">
               <label for="id_medico">Médico:</label>
               <select class="form-control" name="id_medico" required>
                     <option value="">Selecione um médico</option>
                     @foreach($medicos as $medico)
                     <option value="{{ $medico->id }}">{{ $medico->name }}</option>
                     @endforeach
               </select>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</x-app-layout>