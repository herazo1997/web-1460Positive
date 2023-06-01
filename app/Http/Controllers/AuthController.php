<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Rules\ValidateUsuario;

class AuthController extends Controller
{
  public function showLoginForm()
  {
    return view('auth.login');
  }

  public function login(Request $request)
  {
    $request->validate([
      'usuario' => ['required', new ValidateUsuario],
      'password' => 'required',
    ]);

    $credentials = [
      'u_usuario' => $request->input('usuario'),
      'u_password' => $request->input('password'),
    ];

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      return redirect()->intended('/sufragantes-listar');
    }

    return redirect('/login')->withErrors([
      'u_usuario' => 'Las credenciales proporcionadas no coinciden con nuestros registros',
    ]);
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
  }
}
