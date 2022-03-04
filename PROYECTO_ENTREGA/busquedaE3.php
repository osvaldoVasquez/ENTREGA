<link href="Estilo.css" rel="stylesheet" type="text/css">
<center><h1>INFORMACION DEL ACTA BUSCADA</h1></center>


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
			<table width=\"80%\" border=\"1\" color=\"white\">
			<tr>
				<tH><b><center>Codigo del Acta</center><b></td>
				<tH><b><center>Tema</center><b></tH>
				<tH><b><center>Lugar</center><b></tH>
				<tH><b><center>Fecha</center><b></tH>
				<tH><b><center>Nombre del Creador</center><b></tH>
				<tH><b><center>Cargo</center><b></tH>
				<tH><b><center>Desarrollo</center><b></tH>
				<tH><b><center>Compromisos</center><b></tH>
				<tH><b><center>Hora de Inicio</center><b></tH>
				<tH><b><center>Hora de Finalizacion</center><b></tH>
				<tH><b><center>Asistentes</center><b></tH>
				<tH><b><center>Sede</center><b></tH>
				<tH><b><center>Observaciones</center><b></tH>
				<tH><b><center>estado</center><b></tH>
				
			</tr>
			<tr>
			<td><b>".$Consulta['codigoActa']."<b></td>
			<td><b>".$Consulta['tema']."<b></td>
			<td><b>".$Consulta['lugar']."<b></td>
			<td><b>".$Consulta['fecha']."<b></td>
			<td><b>".$Consulta['nombreCreador']."<b></td>
			<td><b>".$Consulta['cargo']."<b></td>
			<td><b>".$Consulta['Desarrollo']."<b></td>
			<td><b>".$Consulta['Compromisos']."<b></td>
			<td><b>".$Consulta['horaInicio']."<b></td>
			<td><b>".$Consulta['horaTerminacion']."<b></td>
			<td><b>".$Consulta['asistentes']."<b></td>
			<td><b>".$Consulta['sede']."<b></td>
			<td><b>".$Consulta['observaciones']."<b></td>
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
       <form action="busquedaE2.php" method="POST" >
        <button type="submit"> VOLVER</button>
        <br><br>
       </form></center>