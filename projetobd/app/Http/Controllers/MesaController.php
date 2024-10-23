<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mesas = Mesa::all();
        return view("mesa.index", compact('mesas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("mesa.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mesa::create($request->all());
        return redirect("/mesa");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mesa = Mesa::findOrFail($id);
        return view("mesa.show", compact('mesa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mesa = Mesa::findOrFail($id);
        return view("mesa.edit", compact('mesa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mesa = Mesa::findOrFail($id);
        $mesa->update($request->all());
        return redirect("/mesa");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mesa = Mesa::findOrFail($id);
        $mesa->delete();
        return redirect("/mesa");
    }
}
