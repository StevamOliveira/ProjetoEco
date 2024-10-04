<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    // Cadastro de usuários
    public function createUser(Request $request)
    {
        // Validação de dados
        $request->validate([
            'email' => 'required|email|unique:users',
            'senha' => 'required|min:6',
        ]);

        // Inserção no banco de dados
        DB::table('users')->insert([
            'email' => $request->input('email'),
            'senha' => Hash::make($request->input('senha')),
        ]);

        // Redirecionar para login após o cadastro
        return redirect('/login')->with('status', 'Cadastro realizado com sucesso!');
    }

    // Autenticação de Login
    public function login(Request $request)
    {
        // Validação de dados
        $credentials = $request->only('email', 'senha');

        // Tentativa de login
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['senha']])) {
            // Login bem-sucedido, redireciona para home
            return redirect('/home');
        } else {
            return back()->withErrors([
                'email' => 'E-mail ou senha incorretos.',
            ]);
        }
    }
}
