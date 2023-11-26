<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/medicos/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de Médicos(os)</h1> --}}
        <br>
        <a href="{{ route('medicos.create') }}" class="btn btn-primary">Nova(o) Médica(o)</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th>CPF</th>
                    <th>Cargo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medicos as $medico)
                    <tr>
                        <td class="colunas">{{ $medico->id }}</td>
                        <td id="name">{{ $medico->name }}</td>
                        <td class="colunas">{{ $medico->email }}</td>
                        <td>{{ $medico->password }}</td>
                        <td>{{ $medico->cpf }}</td>
                        <td>{{ $medico->cargo }}</td>
                        <td>
                            <a href="{{ route('medicos.show', $medico->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('medicos.edit', $medico->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST" style="display: inline;">
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