<?php

namespace App\Http\Controllers\Admin\FluxoLogin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Cadastrar;

class LoginController extends Controller
{
    public function index() 
    {
        $usuario = Cadastrar::informacoes();
        $dados = [
            'usuario' => $usuario,
        ];
        return view('Login.login', ['dados' => $dados]);
    }

    public function store(Request $request)
    {
        $usuario = Cadastrar::autenticar($request);
        $dados   = [
            'usuario' => $usuario,
        ];
        $usuario->senha = $request->Senha;
        $usuario->email = $request->Email;
        if(sizeOf(Hash::check('Senha',$usuario->senha) > 0 )){
            $dados = [
                'usuario' => $usuario,
            ];
            return view('Sila.sila', ['dados' => $dados]);
        } else {
            return back()->withErrors([
                'Email' => 'Email não cadastrado',
                'Senha' => 'Senha incorreta'
            ])->onlyInput('Email');
        }
    }
}


// if(sizeOf($usuario) > 0) {
//                 console.log($e);
//                 $dados = [
//                     'usuario' => $usuario,
//                 ];
//                 return view('Sila.sila', ['dados' => $dados]);
//             } 