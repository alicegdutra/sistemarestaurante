<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Mesa;
use App\Models\Prato;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::with(['cliente', 'mesa', 'prato'])->get();
        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $mesas = Mesa::all();
        $pratos = Prato::all();
        return view('pedidos.create', compact('clientes', 'mesas', 'pratos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'mesa_id' => 'required|exists:mesas,id',
            'prato_id' => 'required|exists:pratos,id',
            'data_pedido' => 'required|date',
        ]);

        Pedido::create($request->all());

        return redirect()->route('pedido.index')->with('success', 'Pedido criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pedido = Pedido::with(['cliente', 'mesa', 'prato'])->findOrFail($id);
        return view('pedidos.show', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pedido = Pedido::findOrFail($id);
        $clientes = Cliente::all();
        $mesas = Mesa::all();
        $pratos = Prato::all();
        return view('pedidos.edit', compact('pedido', 'clientes', 'mesas', 'pratos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validação dos dados
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'mesa_id' => 'required|exists:mesas,id',
            'prato_id' => 'required|exists:pratos,id',
            'data_pedido' => 'required|date',
        ]);

        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());

        return redirect()->route('pedido.index')->with('success', 'Pedido atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return redirect()->route('pedido.index')->with('success', 'Pedido excluído com sucesso!');
    }
}
