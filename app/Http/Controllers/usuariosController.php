<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuarios::paginate(5);
        return view('usuarios.show', compact('usuarios'));
    }

    public function mostrar()
    {
        return view('usuarios.store');
    }

    public function crear(Request $request)
    {
        $usuario = new Usuarios();
        $usuario->u_nombre = $request->input('nombre');
        $usuario->u_usuario = $request->input('usuario');
        $usuario->u_password = $request->input('password');
        $usuario->u_email = $request->input('email');
        $usuario->u_fecha = $request->input('fecha');
        $usuario->save();

        return redirect()->route('us.listar');
    }

    public function edit($id)
    {

        $usuario = Usuarios::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id_usuario)
    {

        $usuario = Usuarios::findOrFail($id_usuario);
        $usuario->u_nombre = $request->input('nombre');
        $usuario->u_usuario = $request->input('usuario');
        $usuario->u_password = $request->input('password');
        $usuario->u_email = $request->input('email');
        $usuario->su_fecha = $request->input('fecha');
        $usuario->save();

        return redirect()->route('us.listar');
    }

    public function destroy($id_usuario)
    {

        $usuario = Usuarios::findOrFail($id_usuario);
        $usuario->delete();

        return redirect()->route('us.listar');
    }
}
