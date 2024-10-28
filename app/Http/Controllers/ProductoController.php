<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Builder; // Asegúrate de que esta línea esté correcta


use function PHPUnit\Framework\fileExists;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $codigo = $request->input('codigo');
        $nombre = $request->input('nombre');

        $productos = $this->filtroBase($codigo, $nombre);

        $data = [
            'productos' => $productos,

        ];

        return view('producto.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $productos = Producto::all(['id', 'nombre']);
        $data = [
            'productos' => $productos
        ];


        return view('producto.Form', $data);
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
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $producto = Producto::find($id);

        $dataProducto = [
            'producto' => $producto,
        ];


        return view('producto.FormEdit', $dataProducto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {

        $producto = Producto::find($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'descripcion' => 'nullable|string',
            'proveedor' => 'nullable|string',
            'fecha' => 'required|date',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('imagen')) {

            // Elimina la imagen anterior, siempre y cuando exista.
            $imagenRuta = public_path('productosIMG/' . $producto->imagen);
            if (file_exists($imagenRuta)) {
                unlink($imagenRuta);
            }

            // Se vuelve a cargar la imagen en nuestra ruta de imagenes
            $imagen = $request->file('imagen');
            $nombreIMG = time() . '.' . $imagen->getClientOriginalExtension();
            $destino = public_path('productosIMG');
            $imagen->move($destino, $nombreIMG);

            $producto->imagen = $nombreIMG; // Actualizar el nombre de la imagen
        }

        // Actualizar los otros campos
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->descripcion = $request->input('descripcion');
        $producto->proveedor = $request->input('proveedor');
        $producto->fecha = $request->input('fecha');

        $producto->save(); // actualizar los cambios

        return redirect()->to('pagina/actualizarProducto/' . $producto->id . "/edit")->with('mensaje', 'Producto actualizado');
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


    private function filtroBase($codigo, $nombre)
    {
        $filtro = Producto::when($codigo, function (Builder $query, $codigo) {
            $query->where('id', $codigo);
        })->when($nombre, function (Builder $query, $nombre) {
            $query->where('nombre', 'like', '%' . $nombre . '%');
        })->get();

        return $filtro;
    }
}
