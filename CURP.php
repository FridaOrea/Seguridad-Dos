<?php
  session_start();
  $eleccion=$_POST['curp'];
  $_SESSION['election'] = $eleccion;
  if($eleccion == 'crear'){
    echo' <!DOCTYPE html>
          <html>
            <head>
              <title> Consultar CURP | Seguridad</title>
            </head>
            <body>';
              $estados = array('AGUASCALIENTES'=>'As', 'BAJA CALIFORNIA SUR'=>'BS', 'COAHUILA'=>'CL', 'CHIAPAS'=>'CS', 'DISTRITO FEDERAL'=>'DF', 'GUANAJUATO' =>'GT', 'HIDALGO'=>'HG', 'MEXICO'=>'MC', 'MORELOS'=> 'MS', 'NUEVO LEON'=>'NL', 'PUEBLA'=>'PL',
              'QUINTANA ROO'=>'QR', 'SINALOA'=>'SL', 'TABASCO'=>'TC', 'TLAXCALA'=>'TL', 'YUCATAN'=>'YN', 'BAJA CALIFORNIA'=> 'BC', 'CAMPECHE'=>'CC', 'COLIMA'=>'CM', 'CHIHUAHUA'=>'CH', 'DURANGO'=>'DG', 'GUERRERO'=>'GR',
              'JALISTO'=>'JC', 'MICHOACAN'=>'MN', 'NAYARIT'=>'NT', 'OAXACA'=>'OC', 'QUERETARO'=>'QT','SAN LUIS POTOSI'=>'SP', 'SONORA'=>'SR', 'TAMAULIPAS'=>'TS', 'VERACRUZ'=> 'VZ', 'ZACATECAS'=>'ZS' );
      echo'     <form method="POST" action="PracticaCURP.php"><br><br>
                  <input type="text" placeholder="Ingresa tu nombre" name="name"/><br><br>
                  <input type="text" placeholder="Ingresa tu apellido paterno" name="lastName1"/><br><br>
                  <input type="text" placeholder="Ingresa tu apellido materno" name="lastName2"/><br><br>
                  <select name="estados">';
                  foreach ($estados as $x => $y){
                      echo'
                          <option value="'.$y.'">'.$x.'</option>

                      ';

                  }
        echo'     </select><br><br>
                  Fecha de nacimiento: <br><input type="date" name="bday"><br><br>
                  GENERO <br>
                  <select name="gender">
                    <option value"H">H</option>
                    <option value"M">M</option>
                  </select><br><br>
                  <input type="submit" value="Enviar!"/>
              </form>
            </body>
          </html>';
    }
    else{
      echo'<!DOCTYPE html>
          <html>
            <head>
                <title>Homoclave CURP | Seguridad</title>
            </head>
            <body>
              <form method="POST" action="PracticaCURP.php">
                <h3>Ingresa tu CURP sin los dos ultimos digitos (homoclave), nosotros te la daremos</h3>
                <input type="text" placeholder="Ingresa tu CURP sin homoclave" name="curp" width="1000px"/><br><br>
                <input type="submit" value="Enviar!"/>
              </form>
            </body>
          </html>';


    }
?>
