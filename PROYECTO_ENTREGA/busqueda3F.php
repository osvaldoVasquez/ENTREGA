<link href="estiloF.css" rel="stylesheet" type="text/css">


</head>
<center>


<h2 class="form__titulo">Informacion de Acta Buscada <div >
</h2>
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

			

			 <table width=\"180%\" border=5\"2\" color=\"white\" >

			
			<tr>


		<tr><tH><d><center>Codigo del Acta:</center><i>".$Consulta['codigoActa']."<i></td></tr>
		<tr><tH><d><center>Lugar:<i></center>".$Consulta['lugar']."<i></td></tr>
		<tr><tH><d><center>Fecha:<i></center>".$Consulta['fecha']."<i></td></tr>

			
			<tr><tH><b><center>Cargo:</center><i>".$Consulta['cargo']." <i></td></tr>
			
			<tr><tH><b><center>Nombre del Creador:</center><i>".$Consulta['nombreCreador']."<i></td></tr>
			<tr><tH><b><center>Tema:</center><i>".$Consulta['tema']."<i></td></tr>
			<tr><tH><b><center>Compromisos:</center><i>".$Consulta['Compromisos']."<i></td>	</tr>
			<tr><tH><b><center>Desarrollo:</center><i>".$Consulta['Desarrollo']."<i></td>	</tr>
			
			<tr><tH><b><center><center>Asistentes:</center><i>".$Consulta['asistentes']." Sede:</center><i>".$Consulta['sede']."<i></td>	</tr>
			
			<tr><tH><b><center>Observaciones:</center><i>".$Consulta['observaciones']."<i></td>	</tr>
			
			<tr><tH><b><center>Hora de Inicio:</center><i>".$Consulta['horaInicio']."<i></td>	</tr>
			<tr><tH><b><center>Hora de Finalizacion:</center><i>".$Consulta['horaTerminacion']."<i></td>	</tr>
			<tr><tH><b><center>estado:</center><i>".$Consulta['estado']."<i></td>	</tr>
			
			
			</tr>
			</table>
			</center>
		
			";


			
		}
	}

	  
		  
	?>

</html>

