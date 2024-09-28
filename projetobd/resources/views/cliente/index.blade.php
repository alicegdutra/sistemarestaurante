<x-app-layout>

    <div class="container mt-4">
        <div class="d-flex justify-content-between mb-4">
            <a class="btn btn-success btn-lg" href="{{ route('cliente.index') }}">
                Gerenciar Cliente
            </a>

            <a class="btn btn-success btn-lg" href="{{ route('cliente.create') }}">
                Inserir novo Cliente
            </a>
        </div>

        <table class="table table-hover table-bordered text-center bg-light text-dark mt-4">
            <thead class="bg-secondary text-light">
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Número</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->CPF }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="/clientes/{{ $cliente->id }}/edit" class="btn btn-warning mx-2">Alterar</a>
                        <form action="/clientes/{{ $cliente->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
