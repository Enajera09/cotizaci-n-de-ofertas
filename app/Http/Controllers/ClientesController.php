<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use App\Models\Cotizaciones;
use Illuminate\Database\Eloquent\Builder;

use function PHPUnit\Framework\fileExists;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id = $request->input('id');
        $nombre = $request->input('nombre');

        $clientes = $this->filtroBase($id, $nombre)->get();


        $data = [
            'clientes' => $clientes,

        ];

        return view('cliente.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Clientes::select(['id', 'nombre'])->get();

        $data = [
            'clientes' => $clientes
        ];

        return view('cliente.Form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nombre = $request->input('nombre');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');
        $email = $request->input('email');

        Clientes::create([
            'nombre' => $nombre,
            'direccion' => $direccion,
            'telefono' => $telefono,
            'email' => $email
        ]);

        return redirect()->to('/cliente/form')->with('mensaje', 'Cliente agregado');
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
    public function edit(int $id)
    {
        $cliente = Clientes::find($id);

        $dataCliente = [
            'cliente' => $cliente
        ];

        return view('cliente.FormEdit', $dataCliente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $cliente = Clientes::find($id);

        if (!$cliente) {
            return redirect()->back()->with('error', 'Cliente no encontrado.');
        }

        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string',
            'telefono' => 'required|string|max:15',
            'email' => 'required|string',
        ]);

        // Actualizar los campos
        $cliente->nombre = $request->input('nombre');
        $cliente->direccion = $request->input('direccion');
        $cliente->telefono = $request->input('telefono');
        $cliente->email = $request->input('email');

        $cliente->save(); // actualizar los cambios

        return redirect()->to('cliente/actualizarCliente/' . $cliente->id . "/edit")->with('mensaje', 'Cliente actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $cliente = Clientes::findOrFail($id);

        $cliente->delete();

        return redirect()->to('cliente/index')->with('delete', 'Cliente eliminado con éxito');
    }

    private function filtroBase($id, $nombre)
    {
        $filtro = Clientes::when($id, function (Builder $query, $id) {
            $query->where('id', $id);
        })->when($nombre, function (Builder $query, $nombre) {
            $query->where('nombre', 'like', '%' . $nombre . '%');
        });

        return $filtro;
    }
}
