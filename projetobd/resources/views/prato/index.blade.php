<x-app-layout>
    <div class="container mt-4">
        <div class="d-flex justify-content-between mb-4">
            <a class="btn btn-success btn-lg" href="{{ route('prato.index') }}">
                Gerenciar Prato
            </a>

            <a class="btn btn-success btn-lg" href="{{ route('prato.create') }}">
                Inserir novo Prato
            </a>
        </div>

        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Lista de Pratos</h5>

        <div class="p-4 border rounded bg-light shadow-lg">
            <table class="table table-striped text-center">
                <thead class="bg-secondary text-light">
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
                            <td>R$ {{ number_format($prato->preco, 2, ',', '.') }}</td>
                            <td>{{ $prato->categoria }}</td>
                            <td>{{ $prato->disponivel ? 'Sim' : 'Não' }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="/prato/{{ $prato->id }}/edit" class="btn btn-warning mx-2">Alterar</a>
                                <form action="/prato/{{ $prato->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mx-2" onclick="return confirm('Tem certeza que deseja excluir este prato?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
