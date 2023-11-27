<x-app-layout>
    <div class="author-details-layout">
        <link rel="stylesheet" href="{{ asset('css/consultas.css') }}">
        <h1>Detalhes da Consulta</h1>
        <ul>
            <li><strong>ID:</strong> {{ $consulta->id }}</li>
            <li><strong>Data:</strong> {{ $paciente->hora }}</li>
            <li><strong>Paciente:</strong> {{ $consulta->id_paciente }}</li>
            <li><strong>Médico:</strong> {{ $consulta->id_medico }}</li>

        </ul>
        <a href="{{ route('consultas.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>