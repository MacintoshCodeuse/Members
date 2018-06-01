<?php

require_once 'model/Model.php';

class UserControler {

	private $model;

	public function __construct() {
        $this->model = new Model();
	}

	public function home() {
		require_once "view/home.php";
	}

	public function list() {
		$members = $this->model->member_list();
		require_once "view/list.php";
	}

	public function new() {
		if (empty($_POST["username"]) && empty($_POST["password"])) {
			include_once "view/new.php";
		} else {
			$username = $_POST["username"];
			$password = $_POST["password"];
			$this->model->register($username, $password);
			include_once "view/home.php";
		}
	}
}

?>
