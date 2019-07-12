<?php

  require_once ("Usuario.php");
  require_once ("Celular.php");
  require_once ("Habilidad.php");

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
  $habilidad1 = new Habilidad("Pintar", 4);
  $habilidad2 = new Habilidad("Fútbol", 3);
  $habilidad3 = new Habilidad("Limpiar", 2);

  $celular1 = new Celular("Apple", "Iphone 5", "Movistar", "1559733315");
  $usuario1 = new Usuario("Alejandro", "alejandrodaquila@hotmail.com", "pass123", $celular1);

  $usuario1->setHabilidad($habilidad1);
  $usuario1->setHabilidad($habilidad2);
  $usuario1->setHabilidad($habilidad3);

  echo "<pre>";
  var_dump($usuario1);
  echo "</pre><br>";

  $celular2 = new Celular ("Sony Ericsson", "Walkman", "Claro", "1536568565");
  $usuario2 = new Usuario("Juan", "juan@hotmail.com", "pass456", $celular2);

  $usuario2->setHabilidad($habilidad1);
  $usuario2->setHabilidad($habilidad2);
  $usuario2->setHabilidad($habilidad3);

  echo "<pre>";
  var_dump($usuario2);
  echo "</pre><br>";

  $celular3 = new Celular ("Samsung", "S4", "Movistar", "1542512185");
  $usuario3 = new Usuario("Martin", "martin@hotmail.com", "pass789", $celular3);

  $usuario3->setHabilidad($habilidad1);
  $usuario3->setHabilidad($habilidad2);
  $usuario3->setHabilidad($habilidad3);

  echo "<pre>";
  var_dump($usuario3);
  echo "</pre><br>";

  echo $usuario1->mostrarTelefono();
  echo $usuario2->mostrarTelefono();

  echo $usuario1->llamar($usuario2, 2);
  echo $usuario2->llamar($usuario3, 5);
  echo $usuario1->llamar($usuario3, 4);

  echo $usuario1->sabeHacer("Pintar", 4);

  echo $usuario1->habilidades();
  /*echo $usuario1->mail . "<br>";
  echo $usuario2->mail . "<br>";

  $usuario1->mail = "a@hotmail.com";
  $usuario2->mail = "j@hotmail.com";

  echo $usuario1->mail . "<br>";
  echo $usuario2->mail . "<br>";*/

  //$usuario1->saludar();
  //$usuario2->saludar();

 ?>
