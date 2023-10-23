<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/secretarias/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de Secretárias(os)</h1> --}}
        <br>
        <a href="{{ route('secretarias.create') }}" class="btn btn-primary">Nova(o) Secretária(o)</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th>CPF</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($secretarias as $secretaria)
                    <tr>
                        <td class="colunas">{{ $secretaria->id }}</td>
                        <td id="nome">{{ $secretaria->nome }}</td>
                        <td class="colunas">{{ $secretaria->email }}</td>
                        <td>{{ $secretaria->senha }}</td>
                        <td>{{ $secretaria->cpf }}</td>
                        <td>
                            <a href="{{ route('secretarias.show', $secretaria->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('secretarias.edit', $secretaria->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('secretarias.destroy', $secretaria->id) }}" method="POST" style="display: inline;">
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