<x-app-layout>
    <div class="author-details-layout">
        <link rel="stylesheet" href="{{ asset('css/secretarias.css') }}">
        <h1>Detalhes da(o) Secretária(o)</h1>
        <ul>
            <li><strong>ID:</strong> {{ $secretaria->id }}</li>
            <li><strong>Nome:</strong> {{ $secretaria->nome }}</li>
            <li><strong>E-mail:</strong> {{  $secretaria->email }}</li>
            <li><strong>Senha:</strong> {{ $secretaria->senha }}</li>
            <li><strong>CPF:</strong> {{ $secretaria->cpf }}</li>
        </ul>
        <a href="{{ route('secretarias.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>