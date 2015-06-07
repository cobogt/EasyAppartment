<?php namespace App\Http\Controllers;

class UsuariosController extends Controller {

	public function getLogin() {
		return View::make('public.login');
	}

	public function login() {
		return 0;
	}

	public function logout() {
		Auth::logout();
	}

	public function getRegistro() {
		return View::make('public.registro');
	}

	public function create() {

	}

	public function update() {

	}

	public function delete() {

	}

	public function edit($id) {

	}
}
?>