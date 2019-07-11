<?php

  include_once ("celular.php");
  class usuario{
    private $nombre;
    private $mail;
    private $pass;
    private $celular;

    public function __construct($nombre, $mail, $pass, celular $celular){
      $this->nombre = $nombre;
      $this->mail = $mail;
      $this->pass = $pass;
      $this->celular = $celular;
    }

    public function saludar(){
      echo "Hola " . $this->nombre . "<br>";
    }

    public function getNombre(){
      return $this->nombre;
    }

    public function setNombre($nombre){
      return $this->nombre = $nombre;
    }

    public function getMail(){
      return $this->mail;
    }

    public function setMail($mail){
      return $this->mail = $mail;
    }

    public function getPass(){
      return $this->pass;
    }

    private function encriptarPass(string $pass){
      return hash($pass, PASSWORD_DEFAULT);
    }

    public function setPass($pass){
      return $this->pass = encriptarPass($pass);
    }

    public function getCelular(){
      return $this->celular;
    }

    public function setCelular(celular $celular){
      return $this->celular = $celular;
    }

    public function mostrarTelefono(celular $celular){
      echo "Teléfono - Marca: " . $this->marca . " " . $this->modelo;
      if ($this->marca = "Apple"){
        echo " y soy fan de los iphones";
      };
    }

  }
 ?>
