
<html>
<head>
<title>Insertar Registro PRENDA</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<link href="Estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
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


                 
                
                $sql = "insert into actasmodificadas (codigoActa, tema, lugar, fecha, nombreCreador, cargo, Desarrollo, Compromisos, horaInicio, horaTerminacion, asistentes, sede, observaciones,  estado) VALUES ('$cod','$tem','$lug','$fec', '$nomC', '$car', '$des', '$com', '$hi', '$ht', '$asi', '$sed', '$obs', '$est')";
                if( mysqli_query( $conexiones, $sql ))
                  {
                       echo "ACTA MODIFICADA";
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
    
    
    <center>
       <form action="modificar.php" method="post">
       <input type="submit" name="Volveraconsultar" value="VOLVER"/>
       </form></center>
</body>
</html>
