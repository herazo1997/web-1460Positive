<?php

namespace App\Http\Controllers;

use App\Models\Sufragantes;
use Illuminate\Http\Request;

class sufragantesController extends Controller
{
    public function index() {
        $listado = Sufragantes::all();
        return view ('sufragantes.listar', compact('listado'));
       
    }
    
    public function mostrarForm(){
        return view('sufragantes.agregar');
    }

    public function insertar(Request $request){
        $user = new Sufragantes();
        $user->su_cedula = $request->input('cedula');
        $user->su_nombres = $request->input('nombres');
        $user->su_apellidos = $request->input('apellidos');
        $user->su_celular = $request->input('number');
        $user->su_email = $request->input('email');
        $user->su_fecha_nacimiento = $request->input('date');
        $user->save();

        return redirect('sufragantes-listar');
    }

    public function edit($id){
        return view('sufragantes.editar', compact('id'));
        
    }
}
