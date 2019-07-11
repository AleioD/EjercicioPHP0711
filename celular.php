<?php

  class celular{
    private $marca;
    private $modelo;
    private $proveedor;
    private $numero;

    public function __construct($marca, $modelo, $proveedor, $numero){
      $this->marca = $marca;
      $this->modelo = $modelo;
      $this->proveedor = $proveedor;
      $this->numero = $numero;
    }

    public function getMarca($marca){
      return $this->marca;
    }

    public function setMarca($marca){
      $this->marca = $marca;
    }

    public function getModelo($modelo){
      return $this->modelo;
    }

    public function setModelo($modelo){
      return $this->modelo = $modelo;
    }

    public function getProveedor($proveedor){
      return $this->proveedor;
    }

    public function setProveedor($proveedor){
      return $this->proveedor = $proveedor;
    }

    public function getNumero($numero){
      return $this->numero;
    }

    public function setNumero($numero){
      return $this->numero = $numero;
    }

  }
 ?>
