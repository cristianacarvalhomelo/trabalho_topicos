<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/consultas/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de Consultas</h1> --}}
        <br>
        <a href="{{ route('consultas.create') }}" class="btn btn-primary">Nova Consulta</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>Paciente</th>
                    <th>Médico</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consultas as $consulta)
                    <tr>
                        <td class="colunas">{{ $consulta->id }}</td>
                        <td id="hora">{{ $consulta->hora }}</td>
                        <td>{{ $consulta->id_paciente }}</td>
                        <td>{{ $consulta->id_medico }}</td>
                        <td>
                            <a href="{{ route('consultas.show', $consulta->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('consultas.edit', $consulta->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('consultas.destroy', $consulta->id) }}" method="POST" style="display: inline;">
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