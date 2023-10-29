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
        <title>Editar Secretária(o)</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Secretária(o)</h1>
            <form action="{{ route('secretarias.update', $secretaria->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" value="{{ $secretaria->name }}">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" value="{{ $secretaria->email }}">
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" value="{{ $secretaria->password }}">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="number" name="cpf" value="{{ $secretaria->cpf }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('secretarias.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>