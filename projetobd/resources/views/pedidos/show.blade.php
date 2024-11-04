<x-app-layout>
    <div class="container mt-6">
        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Excluir Pedido</h5>

        <form action="{{ route('pedido.destroy', $pedido->id) }}" method="POST" class="p-4 border rounded bg-light shadow-lg">
            @csrf
            @method('DELETE')
            
            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="cliente" class="form-label font-weight-bold" style="color: #4b3621;">Cliente:</label>
                    <input type="text" name="cliente" id="cliente" class="form-control border rounded bg-white text-dark" value="{{ $pedido->cliente->nome }}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="mesa" class="form-label font-weight-bold" style="color: #4b3621;">Mesa:</label>
                    <input type="text" name="mesa" id="mesa" class="form-control border rounded bg-white text-dark" value="Mesa {{ $pedido->mesa->numero }}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="prato" class="form-label font-weight-bold" style="color: #4b3621;">Prato:</label>
                    <input type="text" name="prato" id="prato" class="form-control border rounded bg-white text-dark" value="{{ $pedido->prato->nome }}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="data_pedido" class="form-label font-weight-bold" style="color: #4b3621;">Data do Pedido:</label>
                    <input type="date" name="data_pedido" id="data_pedido" class="form-control border rounded bg-white text-dark" value="{{ $pedido->data_pedido }}" disabled />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <button type="submit" class="btn btn-danger btn-lg" style="background-color: #b22222; border: 2px solid #8b0000; color: white;">
                        Excluir Pedido
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
