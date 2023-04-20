<?php

namespace App\Http\Controllers;

use App\Models\Sufragantes;
use Illuminate\Http\Request;

class sufragantesController extends Controller
{
    public function index()
    {
        $listado = Sufragantes::paginate(5);
        return view('sufragantes.listar', compact('listado'));
    }

    public function mostrarForm()
    {
        return view('sufragantes.agregar');
    }

    public function insertar(Request $request)
    {
        $user = new Sufragantes();
        $user->su_cedula = $request->input('cedula');
        $user->su_nombres = $request->input('nombres');
        $user->su_apellidos = $request->input('apellidos');
        $user->su_celular = $request->input('number');
        $user->su_email = $request->input('email');
        $user->su_fecha_nacimiento = $request->input('date');
        $user->save();

        return redirect()->route('user.listar');
    }

    public function edit($id)
    {

        $listados = Sufragantes::findOrFail($id);
        return view('sufragantes.editar', compact('listados'));
    }

    public function update(Request $request, $id)
    {

        $listados = Sufragantes::findOrFail($id);
        $listados->su_cedula = $request->input('cedula');
        $listados->su_nombres = $request->input('nombres');
        $listados->su_apellidos = $request->input('apellidos');
        $listados->su_celular = $request->input('number');
        $listados->su_email = $request->input('email');
        $listados->su_fecha_nacimiento = $request->input('date');
        $listados->save();

        return redirect()->route('user.listar');
    }

    public function destroy($id)
    {

        $listados = Sufragantes::findOrFail($id);
        $listados->delete();

        return redirect()->route('user.listar');
    }
}
