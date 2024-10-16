<x-app-layout>
    <div class="container mt-6">
        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Lista de Pratos</h5>

        <div class="p-4 border rounded bg-light shadow-lg">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Categoria</th>
                        <th>Disponível</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pratos as $prato)
                        <tr>
                            <td>{{ $prato->nome }}</td>
                            <td>{{ $prato->descricao }}</td>
                            <td>R$ {{ $prato->preco }}</td>
                            <td>{{ $prato->categoria }}</td>
                            <td>{{ $prato->disponivel ? 'Sim' : 'Não' }}</td>
                            <td>
                                <a href="{{ route('prato.show', $prato->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('prato.edit', $prato->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('prato.destroy', $prato->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
