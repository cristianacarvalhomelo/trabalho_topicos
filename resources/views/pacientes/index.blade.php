<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/pacientes/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de Pacientes</h1> --}}
        <br>
        <a href="{{ route('pacientes.create') }}" class="btn btn-primary">Novo Paciente</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th>Médico</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                    <tr>
                        <td class="colunas">{{ $paciente->id }}</td>
                        <td id="name">{{ $paciente->name }}</td>
                        <td class="colunas">{{ $paciente->email }}</td>
                        <td class="colunas">{{ $paciente->endereco }}</td>
                        <td class="colunas">{{ $paciente->telefone }}</td>
                        <td>{{ $paciente->password }}</td>
                        <td>{{ $paciente->cpf }}</td>
                        <td>{{ $paciente->id_medico }}</td>
                        <td>
                            <a href="{{ route('pacientes.show', $paciente->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" style="display: inline;">
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