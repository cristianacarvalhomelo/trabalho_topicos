<x-app-layout>
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
            color: #fff;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
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
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Paciente</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Paciente</h1>
            <form action="{{ route('pacientes.update', $paciente->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" value="{{ $paciente->name }}">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="number" name="cpf" value="{{ $paciente->cpf }}">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" value="{{ $paciente->endereco }}">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="number" name="telefone" value="{{ $paciente->telefone }}">
            </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" value="{{ $paciente->email }}">
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" value="{{ $paciente->password }}">
                </div>
                <div class="form-group">
                <label for="id_medico">medico</label>
                <select class="form-control" name="id_medico" required>
                    <option value="">Selecione um médico</option>
                    @foreach($medicos as $medico)
                        <option value="{{ $medico->id }}" {{ $medico->id == $paciente->id_medico ? 'selected' : '' }}>{{ $medico->name }}</option>
                    @endforeach
                </select>
            </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>