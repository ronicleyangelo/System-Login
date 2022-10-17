<?php

 use Illuminate\Routing\RouteGroup;
 use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace'     => 'Admin'], function (){
	Route::group(['namespace' => 'FluxoLogin'], function () {
		Route::get('/', 'LoginController@index')->name('login');
		Route::post('/logar', 'LoginController@store')->name('autenticar-login');
	});
	Route::group(['namespace' => 'FluxoCadastro'], function() {
		Route::get('/formulario-cadastro', 'CadastroController@index')->name('formulario-cadastro');
		Route::get('/cadastrar-usuario', 'CadastroController@cadastrarUsuario')->name('cadastrar-usuario');
		Route::post('/salvar-usuario', 'CadastroController@salvarUsuario')->name('salvar-usuario');
	});
});

