<?php

namespace App\Http\Controllers\Admin\FluxoLogin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Cadastrar;

class LoginController extends Controller
{
    public function index() {

    $usuario = Cadastrar::informacoes();
    $dados = [
        'usuario' => $usuario,
    ];
    return view('Login.login', ['dados' => $dados]);
  }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {

       $usuario = Cadastrar::login($request);
       if(sizeOf($usuario) > 0) {
            $dados = [
                'usuario' => $usuario
            ];
            return view('Cadastrar.conteudo', ['dados' => $dados]);
        };
        return view('Login.login');
    }
}
