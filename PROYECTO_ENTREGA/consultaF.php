<link href="estiloF.css" rel="stylesheet" type="text/css">
<h2 class="form__titulo">Tema del Acta Buscada</h2>


</head>
<center>

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
			<table width=\"80%\" border=\"2\" color=\"white\">
			<tr>
				<td><b><center>Codigo del Acta</center><b></td>
				<td><b><center>Tema</center><b></td>
				
			</tr>
			<tr>
			<td><b>".$Consulta['codigoActa']."<b></td>
			<td><b>".$Consulta['tema']."<b></td>
			
			
			</tr>
			</table>
			</center>
		
			";


			
		}
	}

	  
		  
	?>

</html>

