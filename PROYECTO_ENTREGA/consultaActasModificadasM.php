<html>
<head>
	<meta charset="utf-8">
	<title>OPCIONES</title>
    <meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<link href="estiloF.css" rel="stylesheet" type="text/css">
</head>

<center>

	<h2 class="form__titulo">Informacion de todas las Actas</h2>

<?php

include("conexion.php");



?>


<DOCTYPE html>
	<html>
	<head>
<title>mostar datos</title>



	</head>
	<body>
		<center>

		<br>

		<table>
			<center>

			<table width=\"80%\" border=\"2\" color=\"white\">
			
			<tr>
				<th>Cod.Acta</th>
				<th>Tema</th>
				<th>Lugar</th>
				<th>Fecha</th>
				<th>Nombre Creador</th>
				<th>Cargo</th>
				<th>Desarrolo</th>
				<th>Compromisos</th>
				<th>Hora Inicio</th>
				<th>Hora Finalizacion</th>
				<th>Asistentes</th>
				<th>Sede</th>
				<th>Observaciones</th>
				<th>Estado</th>

	</center>


			</tr>
<?php
			$Insertar = "SELECT * FROM crearacta";

	$resultado= mysqli_query($conexiones, $Insertar);

	while($mostrar=mysqli_fetch_array($resultado)){  

?>

			<tr>

				<td><?php echo $mostrar['codigoActa'] ?></td>
				<td><?php echo $mostrar['tema'] ?></td>
				<td><?php echo $mostrar['lugar'] ?></td>
				<td><?php echo $mostrar['fecha'] ?></td>
				<td><?php echo $mostrar['nombreCreador'] ?></td>
				<td><?php echo $mostrar['cargo'] ?></td>
				<td><?php echo $mostrar['Desarrollo'] ?></td>
				<td><?php echo $mostrar['Compromisos'] ?></td>
				<td><?php echo $mostrar['horaInicio'] ?></td>
				<td><?php echo $mostrar['horaTerminacion'] ?></td>
				<td><?php echo $mostrar['asistentes'] ?></td>
				<td><?php echo $mostrar['sede'] ?></td>
				<td><?php echo $mostrar['observaciones'] ?></td>
				<td><?php echo $mostrar['estado'] ?></td>


	
				

			</tr>
<?php
}
?>
		</table>





	</body>

	<center>
       <form action="consultaM.php" method="POST" >
        <button type="submit"> VOLVER</button>
        <br><br>
       </form></center>