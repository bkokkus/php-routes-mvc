<?php 

class Members extends Controller 
{

	public function index(){
		$usersModel = $this->model('users');
		$users = $usersModel->get_all();

		$this->view('members', ['users' => $users]);
	}

	public function post(){
		print_r($_POST);
	}
}