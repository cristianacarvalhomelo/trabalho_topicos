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
        input[type="date"] {
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
        <title>Editar Consulta</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Consulta</h1>
            <form action="{{ route('consultas.update', $consulta->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="hora">Data:</label>
                    <input type="date" name="hora" value="{{ $consulta->hora }}">
                </div>
                <div class="form-group">
                <label for="id_paciente">paciente</label>
                <select class="form-control" name="id_paciente" required>
                    <option value="">Selecione um paciente</option>
                    @foreach($pacientes as $paciente)
                        <option value="{{ $paciente->id }}" {{ $paciente->id == $consulta->id_paciente ? 'selected' : '' }}>{{ $paciente->name }}</option>
                    @endforeach
                </select>
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