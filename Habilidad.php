<?php

  class Habilidad{
    private $nombre;
    private $expertise;

    public function __construct($nombre, $expertise){
      $this->setNombre($nombre);
      $this->setExpertise($expertise);
    }

    public function getNombreHabilidad (){
      return $this->nombre;
    }

    public function setNombre ($nombre){
      $this->nombre = $nombre;
    }

    public function getExpertise (){
      return $this->expertise;
    }

    public function setExpertise (int $expertise){
      if($expertise >= 0 && $expertise <=5){
        $this->expertise = $expertise;
      } else {
        return "El número debe ser entre 0 y 5.";
      }
    }


  }
 ?>
