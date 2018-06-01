<?php
require_once 'model/Member.php';

class Model
{
	protected $member;

	public function __construct()  {
		$this->member = new Member();
    }

	public function register($username, $password) {
		$this->member->register($username, $password);
	}

	public function member_list() {
		return $this->member->member_list();
	}

}

?>
