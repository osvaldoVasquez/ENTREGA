
<html>
<head>

<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<link href="estiloF2.css" rel="stylesheet" type="text/css">
</head>
<center>
<body>
  <h2 class="form__titulo">
        <?php
            include("conexion.php");

         
           
             if(isset($_POST["codigoActa"], $_POST["tema"], $_POST["lugar"], $_POST["fecha"],$_POST["nombreCreador"], $_POST["cargo"], $_POST["Desarrollo"], $_POST["Compromisos"], $_POST["horaInicio"], $_POST["horaTerminacion"], $_POST["asistentes"], $_POST["sede"],$_POST["observaciones"], $_POST["estado"]))
              {
                $cod = $_POST["codigoActa"]; 
                 $tem = $_POST["tema"];
                $lug = $_POST["lugar"];
                $fec = $_POST["fecha"];
                $nomC = $_POST["nombreCreador"];
                $car = $_POST["cargo"];
                 $des =$_POST["Desarrollo"];
              $com = $_POST["Compromisos"];
                $hi =$_POST["horaInicio"];
               $ht = $_POST["horaTerminacion"];
               $asi = $can = $_POST["asistentes"];
               $sed = $_POST["sede"];
             $obs =  $_POST["observaciones"];
                $est = $_POST["estado"];


                 
                
                $sql = "insert into crearacta (codigoActa, tema, lugar, fecha, nombreCreador, cargo, Desarrollo, Compromisos, horaInicio, horaTerminacion, asistentes, sede, observaciones,  estado) VALUES ('$cod','$tem','$lug','$fec', '$nomC', '$car', '$des', '$com', '$hi', '$ht', '$asi', '$sed', '$obs', '$est')";
                if( mysqli_query( $conexiones, $sql ))
                  {
                       echo "  ACTA REALIZADA";
                  }
                    
                else 
                       {    echo "Error: " . $sql . "<br>" . mysqli_error($conexiones);
                       
                }
                
            } 

          
          else
          {
          echo "NO LLEGARON LOS DATOS";  
              }
      
    ?>
    

    <?php


  include("conexion.php");

  $cod=$_POST['codigoActa'];

  $Insertar = ("SELECT * FROM crearacta WHERE codigoActa = $cod");

  $resultado= mysqli_query($conexiones, $Insertar);
  if (!$resultado) {
    # code...
  }else{
    while ($Consulta= mysqli_fetch_array($resultado)) {
      
      echo "

      <center>
       <table width=\"180%\" border=5\"2\" color=\"white\" >

      
      <tr>


    <tr><tH><d><center>Codigo del Acta:</center><i>".$Consulta['codigoActa']."<i></td></tr>
    <tr><tH><d><center>Lugar:<i></center>".$Consulta['lugar']."<i></td></tr>
    <tr><tH><d><center>Fecha:<i></center>".$Consulta['fecha']."<i></td></tr>

      
      <tr><tH><b><center>Cargo:</center><i>".$Consulta['cargo']." <i></td></tr>
      
      <tr><tH><b><center>Nombre del Creador:</center><i>".$Consulta['nombreCreador']."<i></td></tr>
      <tr><tH><b><center>Tema:</center><i>".$Consulta['tema']."<i></td></tr>
      <tr><tH><b><center>Compromisos:</center><i>".$Consulta['Compromisos']."<i></td> </tr>
      <tr><tH><b><center>Desarrollo:</center><i>".$Consulta['Desarrollo']."<i></td> </tr>
      
      <tr><tH><b><center><center>Asistentes:</center><i>".$Consulta['asistentes']." Sede:</center><i>".$Consulta['sede']."<i></td>  </tr>
      
      <tr><tH><b><center>Observaciones:</center><i>".$Consulta['observaciones']."<i></td> </tr>
      
      <tr><tH><b><center>Hora de Inicio:</center><i>".$Consulta['horaInicio']."<i></td> </tr>
      <tr><tH><b><center>Hora de Finalizacion:</center><i>".$Consulta['horaTerminacion']."<i></td>  </tr>
      <tr><tH><b><center>estado:</center><i>".$Consulta['estado']."<i></td> </tr>
      
      
      </tr>
      </table>
      </center>
    </center>

      ";


      
    }
  }

    
      
  ?>

    
    </h2>
</body>
</center>
</html>
