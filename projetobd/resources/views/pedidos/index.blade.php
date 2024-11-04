<x-app-layout>

    <div class="container mt-4">
        <div class="d-flex justify-content-between mb-4">
            <a class="btn btn-success btn-lg" href="{{ route('pedido.index') }}">Gerenciar Pedidos</a>
            <a class="btn btn-success btn-lg" href="{{ route('pedido.create') }}">Inserir novo Pedido</a>
        </div>

        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Pedidos Cadastrados</h5>

        <table class="table table-hover table-bordered text-center bg-light text-dark mt-4">
            <thead class="bg-secondary text-light">
                <tr>
                    <th>Cliente</th>
                    <th>Mesa</th>
                    <th>Prato</th>
                    <th>Data do Pedido</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->cliente->nome }}</td>
                        <td>{{ $pedido->mesa->numero }}</td>
                        <td>{{ $pedido->prato->nome }}</td>
                        <td>{{ $pedido->data_pedido }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="/pedido/{{ $pedido->id }}/edit" class="btn btn-warning mx-2">Alterar</a>
                            <form action="/pedido/{{ $pedido->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este pedido?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
