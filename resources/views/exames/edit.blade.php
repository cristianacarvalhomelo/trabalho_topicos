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
        input[type="text"] {
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
        <title>Editar Exame</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Exame</h1>
            <form action="{{ route('exames.update', $exame->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="tipo">Tipo:</label>
                    <input type="text" name="tipo" value="{{ $exame->tipo }}">
                </div>
                <div class="form-group">
                    <label for="resultado">Resultado:</label>
                    <input type="text" name="resultado" value="{{ $exame->resultado }}">
                </div>
                <div class="form-group">
                <label for="id_paciente">paciente</label>
                <select class="form-control" name="id_paciente" required>
                    <option value="">Selecione um paciente</option>
                    @foreach($pacientes as $paciente)
                        <option value="{{ $paciente->id }}" {{ $paciente->id == $exame->id_paciente ? 'selected' : '' }}>{{ $paciente->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('exames.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>