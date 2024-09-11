<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Carbon\Carbon;

use function PHPUnit\Framework\fileExists;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        $data = [
            'productos' => $productos
        ];

        return view('producto.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.Form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $imagen = $request->file('imagen');
        $nombreIMG = time() . '.' . $imagen->getClientOriginalExtension();
        $destino = public_path('productosIMG');
        $imagen->move($destino, $nombreIMG);

        $producto = $request->input('nombre');
        $precio = $request->input('precio');
        $stock = $request->input('stock');
        $descripcion = $request->input('descripcion');
        $proveedor = $request->input('proveedor');
        $fecha = $request->input('fecha');

        Producto::create([
            'imagen' => $nombreIMG,
            'nombre' => $producto,
            'precio' => $precio,
            'stock' => $stock,
            'descripcion' => $descripcion,
            'proveedor' => $proveedor,
            'fecha' => $fecha

        ]);

        return redirect()->to('/pagina/form')->with('mensaje', 'Producto agregado');
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
        $producto = Producto::findOrFail($id);

        $imagenRuta = public_path('productosIMG/' . $producto->imagen);

        if (fileExists($imagenRuta)) {
            unlink($imagenRuta);
        }

        $producto->delete();

        return redirect()->to('pagina/index')->with('delete', 'Producto eliminado con éxito');
    }
}
