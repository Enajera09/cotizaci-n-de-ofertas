<?php

namespace App\Http\Controllers;

use App\Models\Cotizaciones;
use Illuminate\Http\Request;
use App\Models\CotizacionesDetalle;
use App\Models\Clientes;
use App\Models\Producto;
use App\Models\Proveedores;
use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Builder;
use App\Models\VistaResumenCotizaciones;

class CotizacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $clientes = $request->input('clientes');
        $fecha_expedicion = $request->input('fecha_expedicion');

        $cotizaciones = $this->filtroBase($clientes, $fecha_expedicion)->get();

        $data = [
            'cotizaciones' => $cotizaciones,

        ];

        return view('cotizacion.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Clientes::all(['id', 'nombre']);
        $usuarios = Usuarios::all(['id', 'nombre']);
        $cotizaciones = Cotizaciones::all(['id']);

        $data = [
            'clientes' => $clientes,
            'usuarios' => $usuarios,
            'cotizaciones' => $cotizaciones
        ];
        return view('Cotizacion.Form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente_id = $request->input('cliente_id');
        $usuario_id = $request->input('usuario_id');
        $forma_pago = $request->input('forma_pago');
        $fecha_expedicion = $request->input('fecha_expedicion');
        $fecha_vencimiento = $request->input('fecha_vencimiento');

        $cotizacion = Cotizaciones::create([
            'cliente_id' => $request->input('cliente_id'),
            'usuario_id' => $request->input('usuario_id'),
            'forma_pago' => $request->input('forma_pago'),
            'fecha_expedicion' => $request->input('fecha_expedicion'),
            'fecha_vencimiento' => $request->input('fecha_vencimiento'),
        ]);
        return redirect()->to('/cotizaciones/form')->with('mensaje', 'Cotización creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cotizaciones $cotizaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $cotizaciones = Cotizaciones::find($id);
        $clientes = Clientes::all(['id', 'nombre']);
        $usuarios = Usuarios::all(['id', 'nombre']);

        $data = [
            'cotizaciones' => $cotizaciones,
            'clientes' => $clientes,
            'usuarios' => $usuarios
        ];

        return view('cotizacion.FormEdit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $cotizacion = Cotizaciones::with('clientes', 'usuarios')->find($id);

        if (!$cotizacion) {
            return redirect()->back()->with('error', 'Cotización no encontrada.');
        }

        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'usuario_id' => 'required|exists:usuarios,id',
            'forma_pago' => 'required|string',
            'fecha_expedicion' => 'required|date',
            'fecha_vencimiento' => 'required|date|after_or_equal:fecha_expedicion',
        ]);

        $cotizacion->update([
            'cliente_id' => $request->input('cliente_id'),
            'usuario_id' => $request->input('usuario_id'),
            'forma_pago' => $request->input('forma_pago'),
            'fecha_expedicion' => $request->input('fecha_expedicion'),
            'fecha_vencimiento' => $request->input('fecha_vencimiento'),
        ]);

        $cotizacion->cliente_id = $request->input('cliente_id');
        $cotizacion->usuario_id = $request->input('usuario_id');
        $cotizacion->forma_pago = $request->input('forma_pago');
        $cotizacion->fecha_expedicion = $request->input('fecha_expedicion');
        $cotizacion->fecha_vencimiento = $request->input('fecha_vencimiento');

        $cotizacion->save(); // actualizar los cambios

        return redirect()->to('cotizaciones/actualizarCotizacion/' . $cotizacion->id . "/edit")->with('mensaje', 'Cotización actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $cotizacion = Cotizaciones::findOrFail($id);
        $cotizacion->CotizacionesDetalle()->delete();
        $cotizacion->delete();

        return redirect()->to('cotizaciones/index')->with('delete', 'Cotización eliminada exitosamente');
    }

    private function filtroBase($clientes, $fecha_expedicion)
    {
        $filtro = VistaResumenCotizaciones::when($clientes, function (Builder $query, $clientes) {
            $query->where('clientes', 'like', '%' . $clientes . '%');
        })->when($fecha_expedicion, function (Builder $query, $fecha_expedicion) {
            $query->whereDate('fecha_expedicion', $fecha_expedicion);
        });
        return $filtro;
    }

}
