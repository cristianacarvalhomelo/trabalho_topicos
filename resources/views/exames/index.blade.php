<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/exames/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de Exames</h1> --}}
        <br>
        <a href="{{ route('exames.create') }}" class="btn btn-primary">Novo Exame</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Resultado</th>
                    <th>Paciente</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($exames as $exame)
                    <tr>
                        <td class="colunas">{{ $exame->id }}</td>
                        <td id="tipo">{{ $exame->tipo }}</td>
                        <td>{{ $exame->resultado }}</td>
                        <td>{{ $exame->id_paciente }}</td>
                        <td>
                            <a href="{{ route('exames.show', $exame->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('exames.edit', $exame->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('exames.destroy', $exame->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>