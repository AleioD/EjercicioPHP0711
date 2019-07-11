<?php

  class celular{
    private $marca;
    private $modelo;
    private $proveedor;
    private $numero;

    public function __construct($marca, $modelo, $proveedor, $numero){
      $this->setMarca($marca);
      $this->setModelo($modelo);
      $this->setProveedor($proveedor);
      $this->setNumero($numero);
    }

    public function getMarca(){
      return $this->marca;
    }

    public function setMarca($marca){
      $this->marca = $marca;
    }

    public function getModelo(){
      return $this->modelo;
    }

    public function setModelo($modelo){
      return $this->modelo = $modelo;
    }

    public function getProveedor(){
      return $this->proveedor;
    }

    public function setProveedor($proveedor){
      return $this->proveedor = $proveedor;
    }

    public function getNumero(){
      return $this->numero;
    }

    public function setNumero($numero){
      return $this->numero = $numero;
    }

  }
 ?>
