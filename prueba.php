<?php

  require_once ("usuario.php");
  require_once ("celular.php");

  /*$usuario1 = new usuario();
  $usuario1->nombre = "Alejandro";
  $usuario1->mail = "alejandrodaquila@hotmail.com";
  $usuario1->pass = "pass123";

  echo "<pre>";
  var_dump($usuario1);
  echo "</pre><br>";

  $usuario2 = new usuario();
  $usuario2->nombre = "Juan";
  $usuario2->mail = "juan@hotmail.com";
  $usuario2->pass = "pass456";

  echo "<pre>";
  var_dump($usuario2);
  echo "</pre><br>";*/
  $celular1 = new celular("Nokia", "1100", "Movistar", "1559733315");
  $usuario1 = new usuario("Alejandro", "alejandrodaquila@hotmail.com", "pass123", $celular1);
  echo "<pre>";
  var_dump($usuario1);
  echo "</pre><br>";

  $celular2 = new celular ("Sony Ericsson", "Walkman", "Claro", "1536568565");
  $usuario2 = new usuario("Juan", "juan@hotmail.com", "pass456", $celular2);

  echo "<pre>";
  var_dump($usuario2);
  echo "</pre><br>";

  echo $usuario1->mostrarTelefono();
  /*echo $usuario1->mail . "<br>";
  echo $usuario2->mail . "<br>";

  $usuario1->mail = "a@hotmail.com";
  $usuario2->mail = "j@hotmail.com";

  echo $usuario1->mail . "<br>";
  echo $usuario2->mail . "<br>";*/

  //$usuario1->saludar();
  //$usuario2->saludar();

 ?>
