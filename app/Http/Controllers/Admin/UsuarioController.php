<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UsuarioController extends Controller {

	public function login(Request $request) {
		$dados = $request->all();

		if (Auth::attempt(['email' => $dados['email'], 'password' => $dados['password']])) {
			\Session::flash('mensagem_login', ['msg' => 'Login realizado com sucesso!', 'class' => 'green white-text']);
			return redirect()->route('admin.principal');
		}

		\Session::flash('mensagem_login', ['msg' => 'Login ou senha inválidos!', 'class' => 'red white-text']);
		return redirect()->route('admin.login');
	}

	public function sair() {
		Auth::logout();
		return redirect()->route('admin.login');
	}

	public function index() {
		$usuarios = User::all();
		return view('admin.usuarios.index', compact('usuarios'));

	}

	public function adicionar (){

		return view('admin.usuarios.adicionar');
	}


	public function salvar(Request $request){

		$dados = $request->all();

		$usuario = new User();
		$usuario->name = $dados['name'];
		$usuario->email = $dados['email'];
		$usuario->password = bcrypt($dados['password']);
		$usuario->save();

		\Session::flash('mensagem_login', ['msg' => 'Usuário criado com sucesso!', 'class' => 'red white-text']);
		return redirect()->route('admin.usuarios');
	}
}
