<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $nombre = $request->input('nombre');

        $usuarios = $this->filtroBase($nombre)->get();

        $data = [
            'usuarios' => $usuarios,

        ];

        return view('usuarios.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Roles::all(['id', 'nombre']);
        $usuarios = Usuarios::all(['id']);

        $data = [
            'roles' => $roles,
            'usuarios' => $usuarios,
        ];
        return view('usuarios.Form', $data);
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $rol = $request->input('rol');
        $pass = $request->input('pass');

        Usuarios::create([
            'nombre' => $nombre,
            'email' => $email,
            'rol_id' => $rol,
            'password'  => $pass,
        ]);

        return redirect()->to('/usuarios/form')->with('mensaje', 'Usuario creado exitosamente');
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
        $usuarios = Usuarios::find($id);
        $roles = Roles::all(['id', 'nombre']);

        $data = [
            'roles' => $roles,
            'usuarios' => $usuarios
        ];

        return view('usuarios.FormEdit', $data);
    }

   /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $usuarios = Usuarios::with('roles')->find($id);

        if (!$usuarios) {
            return redirect()->back()->with('error', 'Cotización no encontrada.');
        }

        $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|string',
            'rol' => 'required|exists:usuarios,id',
            'pass' => 'required|string',
        ]);

        $usuarios->update([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'rol_id' => $request->input('rol'),
            'password' => $request->input('pass'),
        ]);

        $usuarios->nombre = $request->input('nombre');
        $usuarios->email = $request->input('email');
        $usuarios->rol_id = $request->input('rol');
        $usuarios->password = $request->input('pass');

        $usuarios->save(); // actualizar los cambios

        return redirect()->to('usuarios/actualizarUsuario/' . $usuarios->id . "/edit")->with('mensaje', 'usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuarios = Usuarios::findOrFail($id);

        $usuarios->delete();

        return redirect()->to('usuarios/index')->with('delete', 'Usuario eliminado con éxito');
    }

    private function filtroBase($nombre)
    {
        $filtro = Usuarios::when($nombre, function (Builder $query,$nombre) {
            $query->where('nombre', $nombre);
        });

        return $filtro;
    }
}
