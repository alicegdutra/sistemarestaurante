<x-app-layout>

    <h5>Excluir Cliente</h5>

    <form action="/clientes/{{ $cliente->id }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ $cliente->nome }}" disabled/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="CPF" class="form-label">CPF:</label>
                <input type="text" name="CPF" class="form-control" value="{{ $cliente->CPF }}" disabled/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="numero" class="form-label">Número:</label>
                <input type="text" name="telefone" class="form-control" value="{{ $cliente->telefone }}" disabled/>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">Excluir Cliente</button>
            </div>
        </div>
    </form>

</x-app-layout>
