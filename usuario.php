<?php

  class usuario{
    private $nombre;
    private $mail;
    private $pass;
    private $celular;

    public function __construct($nombre, $mail, $pass, celular $celular){
      $this->setNombre($nombre);
      $this->setMail($mail);
      $this->setPass($pass);
      $this->setCelular($celular);
    }

    public function saludar(){
      echo "Hola " . $this->nombre . "<br>";
    }

    public function getNombre(){
      return $this->nombre;
    }

    public function setNombre($nombre){
      $this->nombre = $nombre;
    }

    public function getMail(){
      return $this->mail;
    }

    public function setMail($mail){
      $this->mail = $mail;
    }

    public function getPass(){
      return $this->pass;
    }

    private function encriptarPass(string $pass){
      return password_hash($pass, PASSWORD_DEFAULT);
    }

    public function setPass($pass){
      $this->pass = $this->encriptarPass($pass);
    }

    public function getCelular(){
      return $this->celular;
    }

    public function setCelular(celular $celular){
      $this->celular = $celular;
    }

    public function mostrarTelefono(){
      if ($this->getCelular()->getMarca() == "Apple"){
        return "Teléfono - Marca: " . $this->getCelular()->getMarca() . " " . $this->getCelular()->getModelo() . " y soy fan de los iphones";
      } else {
        return "Teléfono - Marca: " . $this->getCelular()->getMarca() . " " . $this->getCelular()->getModelo();
      };
    }

  }
 ?>
