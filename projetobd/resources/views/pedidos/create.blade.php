<x-app-layout>
    <div class="container mt-6">
        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Novo Pedido</h5>

        <form action="{{ route('pedido.store') }}" method="POST" class="p-4 border rounded bg-light shadow-lg">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="cliente_id" class="form-label font-weight-bold" style="color: #4b3621;">Cliente:</label>
                    <select name="cliente_id" id="cliente_id" class="form-control border rounded bg-white text-dark">
                        @foreach ($clientes as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="mesa_id" class="form-label font-weight-bold" style="color: #4b3621;">Mesa:</label>
                    <select name="mesa_id" id="mesa_id" class="form-control border rounded bg-white text-dark">
                        @foreach ($mesas as $mesa)
                            <option value="{{ $mesa->id }}">Mesa {{ $mesa->numero }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="prato_id" class="form-label font-weight-bold" style="color: #4b3621;">Prato:</label>
                    <select name="prato_id" id="prato_id" class="form-control border rounded bg-white text-dark">
                        @foreach ($pratos as $prato)
                            <option value="{{ $prato->id }}">{{ $prato->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="data_pedido" class="form-label font-weight-bold" style="color: #4b3621;">Data do Pedido:</label>
                    <input type="date" name="data_pedido" id="data_pedido" class="form-control border rounded bg-white text-dark" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <button type="submit" class="btn btn-primary btn-lg" style="background-color: #6f4e37; border: 2px solid #4b3621; color: white;">
                        Salvar Pedido
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
