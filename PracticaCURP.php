<?php
  session_start();
  $counter=18;
  $result=0;
  $equivalent = array('0'=>'0', '1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', 'A'=>'10',
    'B'=>'11', 'C'=>'12', 'D'=>'13', 'E'=>'14', 'F'=>'15',  'G'=>'16', 'H'=>'17', 'I'=>'18', 'J'=>'19', 'K'=>'20', 'L'=>'21', 'M'=>'22',
    'Ñ'=>'23', 'N'=>'24', 'O'=>'25', 'P'=>'26', 'Q'=>'27', 'R'=>'28', 'S'=>'29', 'T'=>'30', 'U'=>'31', 'V'=>'32', 'W'=>'33', 'X'=>'34',
    'Y'=>'35', 'Z'=>'36');

  if($_SESSION["election"] == 'crear'){
    $name = $_POST['name'];
    $firstLast = $_POST['lastName1'];
    $secondLast = $_POST['lastName2'];
    $state = $_POST['estados'];
    $birthday = $_POST['bday'];
    $gender =  $_POST['gender'];
    $firstLast = strtolower($firstLast);
    $name = strtolower($name);


    $curp=substr($firstLast, 0, 1);
    for($x=0; $x<strlen($firstLast); $x++){
      $currentChar = substr($firstLast, $x, 1);
      if($currentChar == 'a' or $currentChar == 'e' or $currentChar == 'i' or $currentChar == 'o' or $currentChar == 'u'){
        $curp.=$currentChar;
        break;
      }
    }
    $curp.=substr($secondLast, 0, 1);
    $curp.=substr($name, 0, 1);
    $bd=substr($birthday, 2);
    $bd=str_replace("-", "", $bd);
    $curp.=$bd;
    $curp.=$gender;
    $curp.=$state;
    $firstFound=TRUE;
    for($x=0; $x<strlen($firstLast); $x++){
      $currentChar = substr($firstLast, $x, 1);
      if($currentChar != 'a' && $currentChar != 'e' && $currentChar != 'i' && $currentChar != 'o' && $currentChar != 'u'){
        if($firstFound)
          $firstFound=FALSE;
        else{
          $curp.=$currentChar;
          break;
        }
      }
    }
    $firstFound=TRUE;
    for($x=0; $x<strlen($secondLast); $x++){
      $currentChar = substr($secondLast, $x, 1);
      if($currentChar != 'a' && $currentChar != 'e' && $currentChar != 'i' && $currentChar != 'o' && $currentChar != 'u'){
        if($firstFound)
          $firstFound=FALSE;
        else{
          $curp.=$currentChar;
          break;
        }
      }
    }
    $firstFound=TRUE;
    for($x=0; $x<strlen($name); $x++){
      $currentChar = substr($name, $x, 1);
      if($currentChar != 'a' && $currentChar != 'e' && $currentChar != 'i' && $currentChar != 'o' && $currentChar != 'u'){
          $curp.=$currentChar;
          break;
      }
    }
    if(substr($birthday, 0, 4) < 2000){
      $curp.=0;
    }
    else {
      $curp.='A';
    }
    $curp = strtoupper($curp);

    for($y=0; $y<16; $y++){
      $result+=$counter*$equivalent[$curp[$y]];
      $counter--;

    }

    $result=$result%10;
    $curp.=$result;
    echo $curp;
  }





  elseif($_SESSION["election"] == 'homoclave'){
    $newCURP=$_POST['curp'];
    if(substr($newCURP, 4, 2) > 20){
      $newCURP.=0;
    }
    else {
      $newCURP.='A';
    }
    $newCURP = strtoupper($newCURP);

    for($y=0; $y<16; $y++){
      $result+=$counter*$equivalent[$newCURP[$y]];
      $counter--;

    }

    $result=$result%10;
    $newCURP.=$result;
    echo $newCURP;

  }











?>
