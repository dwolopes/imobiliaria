<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class UsuarioController extends Controller {

	public function login(Request $request) {
		$dados = $request->all();

		if (Auth::attempt(['email' => $dados['email'], 'password' => $dados['password']])) {
			return redirect()->route('admin.principal');
		}

		return redirect()->route('site.home');
	}
}
