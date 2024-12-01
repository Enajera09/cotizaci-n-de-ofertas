<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

use function PHPUnit\Framework\fileExists;

class ProveedorController extends Controller
{
    public function index(Request $request)
    {
        $nombre = $request->input('nombre');
        $telefono = $request->input('codigo');

        $proveedores = $this->filtroBase($nombre, $telefono)->get();



        $data = [
            'proveedores' => $proveedores,

        ];

        return view('proveedores.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = Proveedores::all(['id']);

        $data = [
            'proveedores' => $proveedores
        ];
        return view('proveedores.Form', $data);
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

        $proveedor = Proveedores::create([
            'nombre' => $request->input('nombre'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
        ]);
        return redirect()->to('/proveedores/form')->with('mensaje', 'Proveedor creada exitosamente.');
    }

    public function edit(int $id)
    {
        $proveedores = Proveedores::find($id);

        $data = [
            'proveedores' => $proveedores,
        ];

        return view('proveedores.FormEdit', $data);
    }

      /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $proveedor = Proveedores::find($id);

        if (!$proveedor) {
            return redirect()->back()->with('error', 'Proveedor no encontrada.');
        }

        $request->validate([
            'nombre' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|string',
            'email' => 'required|string',
        ]);

        $proveedor->update([
            'nombre' => $request->input('nombre'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
        ]);

        $proveedor->nombre = $request->input('nombre');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->email = $request->input('email');

        $proveedor->save(); // actualizar los cambios

        return redirect()->to('proveedores/actualizarProveedor/' . $proveedor->id . "/edit")->with('mensaje', 'Proveedor actualizado');
    }

      /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proveedor = Proveedores::findOrFail($id);

        $proveedor->delete();

        return redirect()->to('proveedores/index')->with('delete', 'Proveedor eliminado con éxito');
    }

    private function filtroBase($nombre, $telefono)
    {
        $filtro = Proveedores::when($nombre, function (Builder $query,$nombre) {
            $query->where('nombre', $nombre);
        })->when($telefono, function (Builder $query, $telefono) {
            $query->whereDate('telefono', $telefono);
        });

        return $filtro;
    }
}
