<link href="Estilo.css" rel="stylesheet" type="text/css">
<center><h1>INFORMACION DEL CLIENTE BUSCADO</h1></center>


</head>
<center>

<?php
	include("conexion.php");

	$cod=$_POST['estado'];

	$Insertar = ("SELECT * FROM crearacta WHERE estado = $cod");

	$resultado= mysqli_query($conexiones, $Insertar);
	if (!$resultado) {
		# code...
	}else{
		while ($Consulta= mysqli_fetch_array($resultado)) {
			
			echo "

			<center>
			<table width=\"80%\" border=\"2\" color=\"white\">
			<tr>
				<td><b><center>Codigo Acta</center><b></td>
				<td><b><center>Estado</center><b></td>
			
				
			</tr>
			<tr>
			<td><b>".$Consulta['codigoActa']."<b></td>
			<td><b>".$Consulta['estado']."<b></td>
			
			
			</tr>
			</table>
			</center>
		
			";


			
		}
	}

	  
		  
	?>

</html>

<center>
       <form action="FConsCliente.php" method="POST" >
        <button type="submit"> VOLVER</button>
        <br><br>
       </form></center>