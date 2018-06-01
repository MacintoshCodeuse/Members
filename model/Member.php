<?php
include_once "model/Globals.php";
require_once 'model/Database.php';

class Member {

    private $id;
    private $username;
    private $password;
    private $mail;
    private $database;

	public function __construct() {
		global $db_name, $db_host, $db_user, $db_pass;
		$this->database = new Database($db_name, $db_host, $db_user, $db_pass);
  }

    //------------------------------
    // Getters
    // ------------------------------

    // Récupère l'id d'un utilisateur
    public function getId() {
      return $this->id;
    }
    // Récupère le nom d'un utilisateur
    public function getUsername() {
      return $this->username;
    }
    // Récupère le mot de passe d'un utilisateur
    public function getPassword() {
      return $this->password;
    }
    // Récupère le mail d'un utilisateur
    public function getMail() {
      return $this->mail;
    }

    //------------------------------
    // Setters
    // ------------------------------

    // Définit l'id d'un utilisateur
    public function setId($id) {
      $this->id = $id;
      return $this;
    }

    // Définit le nom d'un utilisateur
    public function setUsername($username) {
      $this->username = $username;
      return $this;
    }
    // Définit le mot de passe d'un utilisateur
    public function setPassword($password) {
      $this->password = $password;
      return $this;
    }
    // Définit le mail d'un utilisateur
    public function setMail($mail) {
      $this->mail = $mail;
      return $this;
    }

    //------------------------------
    // Méthodes
    // ------------------------------
    public function member_list() {
			return $this->database->query('SELECT * from members', 'Member');
	}

	public function register($username, $password) {
    $statement = 'INSERT INTO members (`username`, `password`) VALUES (:username, :pass)';
    $attributs = array(
        'username'     => $username,
        'pass' => $password
    );
    $class = 'model/Member';
    $this->database->execute($statement, $attributs, $class);
  }
}
