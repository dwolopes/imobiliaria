<?php

use App\User;
use Illuminate\Database\Seeder;

class UsuariosSeeds extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$usuario = new User();
		$usuario->name = "Douglas Lopes";
		$usuario->email = "dwillian.lopes@gmail.com";
		$usuario->password = bcrypt("@123");
		$usuario->save();
	}
}
