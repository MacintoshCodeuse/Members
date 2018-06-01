<?php

class Member {

    private $id;
    private $username;
    private $password;
    private $mail;

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


}
