<meta charset="utf-8" />
<html>
<head>
<title>DATOS DE CATEGORIA</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<link href="Estilo.css" rel="stylesheet" type="text/css">
<center><h1>DATOS DE CATEGORIA</h1></center>


</head>
<?php
	include("conexion.php");
	$id=$_POST['codigoActa'];

	$Insertar = ("SELECT * FROM crearacta WHERE codigoActa = $id");

	$resultado= mysqli_query($conexiones, $Insertar);
	if (!$resultado) {

		
			echo "

			<center>
			
			<tr>
				<td><b><center>INFORMACION NO ELIMINADA</center><b></td
			</tr>
			</center>
		
			";

			}else{
				while ($Consulta= mysqli_fetch_array($resultado)) {
					mysqli_query($conexiones,"DELETE  FROM crearacta WHERE codigoActa =$id");

			echo "

			<center>
			
			<tr>
				<td><b><center>INFORMACION ELIMINADA</center><b></td>
			</tr>
			</center>
		
			";


			
		}
	}

	  
		  
	?>
<center>
       <form action="eliminarM2.php" method="POST" >
       <input  type="submit" value="VOLVER" > 
       </form></center>
</body>
</html>