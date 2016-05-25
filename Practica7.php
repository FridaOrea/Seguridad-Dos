<?php
  $palabra = $_POST['palabra'];
  $hexadecimal = bin2hex($palabra);
  $longitud = strlen($hexadecimal);
  if($longitud % 2 == 0){
      $primera = substr($hexadecimal, 0, 1);
      $segunda = substr($hexadecimal, -1, 1);
      $palabraNueva = $hexadecimal.''.$primera.''.$segunda;
  }
  else {
    $primera = substr($hexadecimal, 0, 2);
    $segunda = substr($hexadecimal, -1, 3);
    $palabraNueva = $hexadecimal.''.$primera.''.$segunda;
  }
  $binary = base_convert ( $palabraNueva , 16 , 2);
  $decimal = bindec($binary);
  $cadena = chr($decimal);
  echo $cadena;
  ?>
