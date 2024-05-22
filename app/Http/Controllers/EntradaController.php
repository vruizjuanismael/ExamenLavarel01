<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use App\Http\Requests\EntradaRequest;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $texto = $request->get('texto');
        $registros = Entrada::where('placa', 'like', '%' . $texto . '%')->paginate(10); // Cambia 'Vehiculo' por tu modelo adecuado
        return view('entrada.index', compact('texto', 'registros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehiculos = Vehiculo::all();
        return view('entrada.create', compact('vehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $entrada = new Entrada;
        $entrada->placa = $request->input('placa');
        $entrada->fecha = now();
        $entrada->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Registro creado satisfactoriamente'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrada $entrada)
    {
        return "Mostrar";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $entrada = Entrada::findOrFail($id);
        return view('entrada.edit', compact('entrada'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $entrada = Entrada::findOrFail($id);
        $entrada->placa = $request->placa;
        $entrada->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Actualización de datos satisfactoria'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $entrada = Entrada::findOrFail($id);
        $entrada->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Entrada eliminada'
        ]);
    }
}
