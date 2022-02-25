<html>
<head>
	<meta charset="utf-8">
	<title>FORMULARIO DE REGISTRO</title>
   <meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<link href="pantalla.css" rel="stylesheet" type="text/css">
</head>

<body>

  <center>
<h1></h1>


	<h2 class="form__titulo">SELECIONE LA FUNCION A REALIZAR</h2>

	<div class="contenedor-inputs" >

      
      <center>

       <form action="ACTA.php" method="POST">
        
      




         
        <input  type="submit" value=" Crear acta" class="btn_crear"> </tr>
       </center>
</form>
  </center>

  
  </center>

  <center>
       <form action="estado.php" method="POST">
        
       
        
        <input type="submit" value="Estado de las actas "  name="btn_estado"> </tr>
       </center>
</form>
  </center>

  <center>
       <form action="modificadaACTA.php" method="POST">
        
       
         
         <input type="submit" value="Actas modificadas"  name="btn_modificar"> </tr>
       </center>
</form>
  </center>

  <center>
       <form action="todasACTAS.php" method="POST">
        
       
         
         <input type="submit" value="Todas las Actas Realizadas"  name="btn_todas"> </tr>
       </center>
</form>
  </center>

  <center>
       <form action="eliminarACTA.php" method="POST">
        
       
         
         <input type="submit" value="Eliminar acta"  name="btn_eliminar"> </tr>
       </center>
</form>
  </center>
  


     
       
    </center>


    	
</div>
</form>
</body>


</html>
<a href="salir.php">Cerrar Sesión</a>