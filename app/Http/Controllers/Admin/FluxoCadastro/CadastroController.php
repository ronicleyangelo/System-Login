<?php

namespace App\Http\Controllers\Admin\FluxoCadastro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Cadastrar;

class CadastroController extends Controller
{
    public function index() {
    	$cdt = Cadastrar::informacoes();
    	$dados 	= [
    		'cadastro' => $cdt
    	];
        return view ('Cadastrar.conteudo',compact('dados'));
    }

    public function cadastrarUsuario() {
        return view ('Cadastrar.conteudo');
    }

    public function salvarUsuario(Request $request) {
        
        $usuario = new Cadastrar();
        $usuario->name  = $request->name;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->save();
        return redirect()->route('login');
    }
}
