<x-app-layout>
    <div class="container mt-6">
        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Editar Mesa</h5>

        <form action="{{ route('mesa.update', $mesa->id) }}" method="POST" class="p-4 border rounded bg-light shadow-lg">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="numero" class="form-label font-weight-bold" style="color: #4b3621;">Número da Mesa:</label>
                    <input type="number" name="numero" id="numero" class="form-control border rounded bg-white text-dark" value="{{ $mesa->numero }}" required />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="capacidade" class="form-label font-weight-bold" style="color: #4b3621;">Capacidade de Pessoas:</label>
                    <input type="number" name="capacidade" id="capacidade" class="form-control border rounded bg-white text-dark" value="{{ $mesa->capacidade }}" required />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="localizacao" class="form-label font-weight-bold" style="color: #4b3621;">Localização:</label>
                    <input type="text" name="localizacao" id="localizacao" class="form-control border rounded bg-white text-dark" value="{{ $mesa->localizacao }}" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="disponivel" class="form-label font-weight-bold" style="color: #4b3621;">Disponível:</label>
                    <select name="disponivel" id="disponivel" class="form-control border rounded bg-white text-dark" required>
                        <option value="1" {{ $mesa->disponivel ? 'selected' : '' }}>Sim</option>
                        <option value="0" {{ !$mesa->disponivel ? 'selected' : '' }}>Não</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <button type="submit" class="btn btn-primary btn-lg" style="background-color: #6f4e37; border: 2px solid #4b3621; color: white;">
                        Atualizar Mesa
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
