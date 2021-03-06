<?php

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

Route::get('/', function () {
	return view('site.home');
})->name('site.home');

/*Views usando banco de dados*/

Route::get('/sobre', 'Site\PaginaController@sobre')->name('site.sobre');



/*-------*/


Route::get('/contato', function () {
	return view('site.contato');
})->name('site.contato');

Route::get('/imovel/{id}/{titulo?}', function () {
	return view('site.imovel');
})->name('site.imovel');

//Auth::routes();

/*Admin routes*/

Route::get('/admin/login', function () {
	return view('admin.login.index');
})->name('admin.login.index');

Route::post('/admin/login', 'Admin\UsuarioController@login')->name('admin.login');

Route::group(['middleware' => 'auth'], function () {

	Route::get('/admin', function () {
		return view('admin.principal.index');
	})->name('admin.principal')->middleware('auth');

	Route::get('/admin/login/sair', 'Admin\UsuarioController@sair')->name('admin.login.sair')->middleware('auth');

	Route::get('/admin/usuarios', 'Admin\UsuarioController@index')->name('admin.usuarios')->middleware('auth');

	Route::get('/admin/usuarios/adicionar', 'Admin\UsuarioController@adicionar')->name('admin.usuarios.adicionar')->middleware('auth');

	Route::post('/admin/usuarios/salvar', 'Admin\UsuarioController@salvar')->name('admin.usuarios.salvar')->middleware('auth');

	Route::get('/admin/usuarios/editar/{id}', 'Admin\UsuarioController@editar')->name('admin.usuarios.editar')->middleware('auth');

	Route::put('/admin/usuarios/atualizar/{id}', 'Admin\UsuarioController@atualizar')->name('admin.usuarios.atualizar')->middleware('auth');

	Route::get('admin/usuarios/deletar/{id}', 'Admin\UsuarioController@deletar')->name('admin.usuarios.deletar')->middleware('auth');

	Route::get('admin/paginas', 'Admin\PaginaController@index')->name('admin.paginas')->middleware('auth');

	Route::get('admin/paginas/editar/{id}', 'Admin\PaginaController@editar')->name('admin.paginas.editar')->middleware('auth');

	Route::put('admin/paginas/atualizar/{id}', 'Admin\PaginaController@atualizar')->name('admin.paginas.atualizar')->middleware('auth');

});

/*Rota página inicial*/
Route::get('/home', 'HomeController@index')->name('home');
