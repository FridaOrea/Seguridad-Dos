<?php
  $numero = $_POST['numero'];
  $select = $_POST['isbn'];
  $mult = 1;
  $respuesta = 0;
  $re = 0;
  if($select == 10){
    $array = str_split($numero);
    $count = count($array);
    for($x=0; $x<$count; $x++){
        $respuesta += ($array[$x]*$mult);
        $mult++;
    }
    $re = $respuesta%11;
    if($re == 10){
      echo 'x';
    }
    else{
      echo $re;
    }
  }

?>
