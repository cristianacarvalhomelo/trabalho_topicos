<x-app-layout>
    <div class="author-details-layout">
        <link rel="stylesheet" href="{{ asset('css/medicos.css') }}">
        <h1>Detalhes da(o) Médica(o)</h1>
        <ul>
            <li><strong>ID:</strong> {{ $medico->id }}</li>
            <li><strong>Nome:</strong> {{ $medico->name }}</li>
            <li><strong>E-mail:</strong> {{  $medico->email }}</li>
            <li><strong>Senha:</strong> {{ $medico->password }}</li>
            <li><strong>CPF:</strong> {{ $medico->cpf }}</li>
            <li><strong>Cargo:</strong> {{ $medico->cargo }}</li>
        </ul>
        <a href="{{ route('medicos.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>