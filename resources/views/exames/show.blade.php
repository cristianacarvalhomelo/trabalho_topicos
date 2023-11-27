<x-app-layout>
    <div class="author-details-layout">
        <link rel="stylesheet" href="{{ asset('css/exames.css') }}">
        <h1>Detalhes do Exame</h1>
        <ul>
            <li><strong>ID:</strong> {{ $exame->id }}</li>
            <li><strong>Tipo:</strong> {{ $exame->tipo }}</li>
            <li><strong>Resultado:</strong> {{ $exame->resultado }}</li>
            <li><strong>Paciente:</strong> {{ $exame->id_paciente }}</li>

        </ul>
        <a href="{{ route('exames.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>