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
        $cdt = Cadastrar::informacoes();
        $dados 	= [
            'cadastro' => $cdt
        ];
        return view ('Cadastrar.conteudo',['dados' => $dados]);
    }

    public function salvarUsuario(Request $request) {

        $mensagem = [
            'Cadastro' => 'Cadastro realizado'
        ];

        $usuario            = new Cadastrar();
        $usuario->name      = $request->name;
        $usuario->email     = $request->email;
        if($request->senha === $request->ConfirmarSenha) {
            $usuario->senha = bcrypt(str_random($request->Senha));
        } else {
            return back()->withErrors([
                'ConfirmarSenha' => 'Senha não confere',
            ])->onlyInput('ConfirmarSenha');
        }
        $usuario->save();
        return redirect()->route('login')->with('mensagem', 'Cadastro realizado com sucesso!!');
    }
}
