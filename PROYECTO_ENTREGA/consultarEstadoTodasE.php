<html>
<head>
	<meta charset="utf-8">
	<title>OPCIONES</title>
    <meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<link href="estiloF.css" rel="stylesheet" type="text/css">
</head>

<center>

	<h2 class="form__titulo">INFORMACION DE ESTADO DE TODAS LAS ACTAS</h2>
	<div class="contenedor-inputs" >

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

			<table width=\"200%\" border=\"2\" color=\"white\">
			
			<tr>
				<td><CENTER>Codigo ACTA</CENTER></td>
				<td><CENTER>tema</CENTER></td>
				<td><CENTER>estado</CENTER></td>
				

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
				<td><?php echo $mostrar['estado'] ?></td>
				

	

			</tr>
<?php
}
?>
		</table>





	</body>

	