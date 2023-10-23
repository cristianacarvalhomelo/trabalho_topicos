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
            input[type="email"],
            input[type="password"],
            input[type="number"] {
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
        <h1>Nova(o) Secretária(o)</h1>
        <form action="{{ route('secretarias.store') }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="number" name="cpf">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email">
            </div>
            <div class="form-group">
                <label for="senha">Password:</label>
                <input type="password" name="senha">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('secretarias.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>