<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Cadastrar extends Model
{
   	protected $table      = 'cadastrar';
    protected $primaryKey = 'numero';

    public static function informacoes() {
    	$obejto = DB::table('cadastrar')
    		->select('numero','name','email')
    		->orderByDesc('name', 'ASC')
    		->get();
    	return $obejto;
    }
    public static function salvar($request) {
    	$obejto = DB::table('cadastrar')
            ->where('email', $request->email)->count()
    		->get();
    	return $obejto;
    }
    public static function login($request) {
        $obejto = DB::table('cadastrar')
            ->where('email', $request->email)
            ->where('senha', $request->password)
            ->get();
        return $obejto;
    }
}
