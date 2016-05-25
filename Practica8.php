<?php
  $str = $_POST['cadena'];
  $result = hashLose($str);
  echo 'El hash de la cadena '.$str.' es '.$result.'.';

  function hashLose($string){
    $array = str_split($string);
    $length = count($array);
    $hash = 0;
    for($y=0; $y<$length; $y++)
      $hash += ord($array[$y]);
    return $hash;
  }
?>










?>
