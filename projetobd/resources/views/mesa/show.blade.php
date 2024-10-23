<x-app-layout>

    <h5>Excluir Mesa</h5>

    <form action="/mesa/{{ $mesa->id }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="numero" class="form-label">Número da Mesa:</label>
                <input type="text" name="numero" class="form-control" value="{{ $mesa->numero }}" disabled/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="capacidade" class="form-label">Capacidade:</label>
                <input type="text" name="capacidade" class="form-control" value="{{ $mesa->capacidade }}" disabled/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="localizacao" class="form-label">Localização:</label>
                <input type="text" name="localizacao" class="form-control" value="{{ $mesa->localizacao }}" disabled/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="disponivel" class="form-label">Disponível:</label>
                <input type="text" name="disponivel" class="form-control" value="{{ $mesa->disponivel ? 'Sim' : 'Não' }}" disabled/>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta mesa?')">Excluir Mesa</button>
            </div>
        </div>
    </form>

</x-app-layout>
