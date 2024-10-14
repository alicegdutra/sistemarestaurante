<x-app-layout>

    <h5>Alterar Cliente</h5>

    <form action="/clientes/{{ $cliente->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ $cliente->nome }}" required/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="CPF" class="form-label">CPF:</label>
                <input type="text" name="CPF" class="form-control" value="{{ $cliente->CPF }}" required/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="telefone" class="form-label">Número:</label>
                <input type="text" name="telefone" class="form-control" value="{{ $cliente->telefone }}" required/>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </div>
    </form>

</x-app-layout>

