<x-app-layout>
    <div class="container mt-6">
        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Novo Cliente</h5>

        <form action="{{ route('cliente.store') }}" method="POST" class="p-4 border rounded bg-light shadow-lg">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="nome" class="form-label font-weight-bold" style="color: #4b3621;">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control border rounded bg-white text-dark" placeholder="Digite o nome completo" required />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="cpf" class="form-label font-weight-bold" style="color: #4b3621;">CPF:</label>
                    <input type="text" name="CPF" id="cpf" class="form-control border rounded bg-white text-dark" placeholder="Digite o CPF" required />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="telefone" class="form-label font-weight-bold" style="color: #4b3621;">Número de Telefone:</label>
                    <input type="text" name="telefone" id="telefone" class="form-control border rounded bg-white text-dark" style="min-width: 100%;" placeholder="Digite o número de telefone" required />
                </div>
            </div>

    
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <button type="submit" class="btn btn-primary btn-lg" style="background-color: #6f4e37; border: 2px solid #4b3621; color: white;">
                        Salvar Cliente
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
