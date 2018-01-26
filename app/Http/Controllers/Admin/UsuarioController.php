<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
