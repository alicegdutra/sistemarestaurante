<x-app-layout>
    <div class="container mt-6">
        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Detalhes do Prato</h5>

        <div class="p-4 border rounded bg-light shadow-lg">
            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <p><strong>Nome do Prato:</strong> {{ $prato->nome }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <p><strong>Descrição:</strong> {{ $prato->descricao }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <p><strong>Preço:</strong> R$ {{ $prato->preco }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <p><strong>Categoria:</strong> {{ $prato->categoria }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <p><strong>Disponível:</strong> {{ $prato->disponivel ? 'Sim' : 'Não' }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <a href="{{ route('prato.edit', $prato->id) }}" class="btn btn-primary btn-lg" style="background-color: #6f4e37; border: 2px solid #4b3621; color: white;">
                        Editar Prato
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
