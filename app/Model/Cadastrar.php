<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Cadastrar extends Model
{
   	protected $table      = 'cadastrar';
    protected $primaryKey = 'numero';

    public static function informacoes() {
    	$objeto = DB::table('cadastrar')
    		->select('numero','name','email')
    		->orderByDesc('name', 'ASC')
    		->get();
    	return $objeto;
    }
    public static function salvar($request) {
    	$objeto = DB::table('cadastrar')
            ->where('email', $request->email)->count()
    		->get();
    	return $objeto;
    }
    public static function autenticar($request) {
        $objeto = DB::table('cadastrar')
            ->where('email', $request->Email)
            ->select('senha','email', 'numero')
            ->get();
        return $objeto;
    }
}
