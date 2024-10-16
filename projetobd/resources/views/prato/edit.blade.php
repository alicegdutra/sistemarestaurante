<x-app-layout>
    <div class="container mt-6">
        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Editar Prato</h5>

        <form action="{{ route('prato.update', $prato->id) }}" method="POST" class="p-4 border rounded bg-light shadow-lg">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="nome" class="form-label font-weight-bold" style="color: #4b3621;">Nome do Prato:</label>
                    <input type="text" name="nome" id="nome" class="form-control border rounded bg-white text-dark" value="{{ $prato->nome }}" required />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="descricao" class="form-label font-weight-bold" style="color: #4b3621;">Descrição:</label>
                    <textarea name="descricao" id="descricao" class="form-control border rounded bg-white text-dark">{{ $prato->descricao }}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="preco" class="form-label font-weight-bold" style="color: #4b3621;">Preço:</label>
                    <input type="number" step="0.01" name="preco" id="preco" class="form-control border rounded bg-white text-dark" value="{{ $prato->preco }}" required />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="categoria" class="form-label font-weight-bold" style="color: #4b3621;">Categoria:</label>
                    <input type="text" name="categoria" id="categoria" class="form-control border rounded bg-white text-dark" value="{{ $prato->categoria }}" required />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <button type="submit" class="btn btn-primary btn-lg" style="background-color: #6f4e37; border: 2px solid #4b3621; color: white;">
                        Atualizar Prato
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
