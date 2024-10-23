<x-app-layout>

    <div class="container mt-4">
        <div class="d-flex justify-content-between mb-4">
            <a class="btn btn-success btn-lg" href="{{ route('mesa.index') }}">Gerenciar Mesas</a>
            <a class="btn btn-success btn-lg" href="{{ route('mesa.create') }}">Inserir nova Mesa</a>
        </div>

        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Mesas Cadastradas</h5>

        <table class="table table-hover table-bordered text-center bg-light text-dark mt-4">
            <thead class="bg-secondary text-light">
                <tr>
                    <th>Número</th>
                    <th>Capacidade</th>
                    <th>Localização</th>
                    <th>Disponível</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mesas as $mesa)
                <tr>
                    <td>{{ $mesa->numero }}</td>
                    <td>{{ $mesa->capacidade }}</td>
                    <td>{{ $mesa->localizacao }}</td>
                    <td>{{ $mesa->disponivel ? 'Sim' : 'Não' }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="/mesa/{{ $mesa->id }}/edit" class="btn btn-warning mx-2">Alterar</a>
                        <form action="/mesa/{{ $mesa->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta mesa?')">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
