<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pedido;

class DashboardController extends Controller
{
    public function gerarGrafico(){
        $data = Pedido::select('cliente_id', 'prato_id', 'mesa_id', DB::raw('AVG(valor) as valor_medio'))
        ->with(['cliente', 'prato', 'mesa'])
        ->groupBy(['cliente_id', 'prato_id', 'mesa_id'])
        ->get();
        $clientes = [];
        $valores_medios = [];
        foreach($data as $linha){
            $clientes[] = $linha->cliente->nome;
            $valores_medios[] = $linha->valor_medio;
        }
        return view('dashboard', compact('cliente', 'valores_medios'));
    }
}
