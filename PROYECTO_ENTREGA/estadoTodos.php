<html>
<head>
	<meta charset="utf-8">
	<title>OPCIONES</title>
     <meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<link href="Estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
	<center>	
	<?php if (isset($_POST['btn_codigo'])): ?>
		<h2>Presione el Botón para Avanzar</h2>
		</center>

		
		<center>
       <form action="FC.php" method="POST" >
       <input  type="submit" value="Ingresar" > 
       </form></center>
	
	<?php endif ?>
<CENTER>
	<?php if (isset($_POST['btn_informacion'])): ?>
		
       <form action="mostrarCliente.php" method="POST" >
      
	<?php endif ?>

	
</head>
<body>

</body>
</html>
	  