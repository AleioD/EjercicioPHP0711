<?php

  class Usuario{
    private $nombre;
    private $mail;
    private $pass;
    private $celular;
    private $habilidad;

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

    public function setCelular(Celular $celular){
      $this->celular = $celular;
    }

    public function getHabilidad(){
      return $this->habilidad;
    }

    public function setHabilidad(Habilidad $habilidad){
      $this->habilidad[] = $habilidad;
    }

    public function mostrarTelefono(){
      if ($this->getCelular()->getMarca() == "Apple"){
        return "Teléfono - Marca: " . $this->getCelular()->getMarca() . " " . $this->getCelular()->getModelo() . " y soy fan de los iphones<br>";
      } else {
        return "Teléfono - Marca: " . $this->getCelular()->getMarca() . " " . $this->getCelular()->getModelo() . "<br>";
      };
    }

    public function llamar($usuario, $tiempo){
      if ($usuario->getCelular()->getProveedor() == $this->getCelular()->getProveedor()) {
        return "Costo de llamada: $0<br>";
      } else {
        return "Costo de llamada: $" . $tiempo * 10 . "<br>";
      }
    }

    public function sabeHacer(string $habilidad, int $puntaje){
      foreach ($this->getHabilidad() as $nombre => $unaHabilidad) {
        if($unaHabilidad == $habilidad){
          return "true";
        } else {
          return "false";
        }
      }
    }

    public function habilidades (){
      foreach ($this->getHabilidad() as $unaHabilidad) {
        echo $unaHabilidad->getNombre() . "<br>";
      }
    }
  }
 ?>
