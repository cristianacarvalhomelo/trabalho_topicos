<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nova Consulta</title>
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
            input[type="date"] {
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
        <h1>Nova Consulta</h1>
        <form action="{{ route('consultas.store') }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
            @csrf
            <div class="form-group">
                <label for="hora">Data:</label>
                <input type="date" name="hora">
            </div>
            <div class="form-group">
               <label for="id_paciente">Paciente:</label>
               <select class="form-control" name="id_paciente" required>
                     <option value="">Selecione um paciente</option>
                     @foreach($pacientes as $paciente)
                     <option value="{{ $paciente->id }}">{{ $paciente->name }}</option>
                     @endforeach
               </select>
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
            <a href="{{ route('consultas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</x-app-layout>