<x-app-layout>
    <div class="author-details-layout">
        <link rel="stylesheet" href="{{ asset('css/pacientes.css') }}">
        <h1>Detalhes do Paciente</h1>
        <ul>
            <li><strong>ID:</strong> {{ $paciente->id }}</li>
            <li><strong>Nome:</strong> {{ $paciente->name }}</li>
            <li><strong>CPF:</strong> {{ $paciente->cpf }}</li>
            <li><strong>Endereço:</strong> {{ $paciente->endereco }}</li>
            <li><strong>Telefone:</strong> {{ $paciente->telefone }}</li>
            <li><strong>E-mail:</strong> {{  $paciente->email }}</li>
            <li><strong>Senha:</strong> {{ $paciente->password }}</li>
            <li><strong>Médico:</strong> {{ $paciente->id_medico }}</li>

        </ul>
        <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>