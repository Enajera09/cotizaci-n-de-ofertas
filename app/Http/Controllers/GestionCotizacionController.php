<?php

namespace App\Http\Controllers;

use App\Models\Cotizaciones;
use Illuminate\Http\Request;

class GestionCotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $id)
    {
        $cotizacion = Cotizaciones::with(['clientes', 'usuarios'])->find($id);


        $dataCotizaciones = [
            'cotizacion' => $cotizacion,

        ];

        return view('gestionarCotizacion.index', $dataCotizaciones);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
