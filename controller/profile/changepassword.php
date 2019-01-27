<?php 

class ChangePassword extends Controller
{
	public function index(){

		echo "<small>method is work!</small>";
		$this->view('change-password');
	}
}