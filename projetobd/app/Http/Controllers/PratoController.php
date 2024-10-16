<?php

namespace App\Http\Controllers;

use App\Models\Prato;
use Illuminate\Http\Request;

class PratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pratos = Prato::all();
        return view("prato.index", compact('pratos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("prato.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Prato::create($request->all());
        return redirect("/prato");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prato = Prato::findOrFail($id);
        return view("prato.show", compact('prato'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prato = Prato::findOrFail($id);
        return view("prato.edit", compact('prato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prato = Prato::findOrFail($id);
        $prato->update($request->all());
        return redirect("/prato");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prato = Prato::findOrFail($id);
        $prato->delete();
        return redirect("/prato");
    }
}
