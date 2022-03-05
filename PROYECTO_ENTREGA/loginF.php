</style>
<body>
<center>
<form method="POST" action="loginF.php">
  <link href="Estilo.css" rel="stylesheet" type="text/css">
   <h1>PLATAFORMA DE ACTAS</h1>
<?php
  

  $dbhost="localhost";
  $dbuser="root";
  $dbpass="";
  $dbname="actas";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname );
  if (!$conn)
  {
      die("no hay conexion: " .mysqli_connect_error());


  }

   $nombre = $_POST["TXTUSUARIO"];
  $pass = $_POST["TXTPASSWORD"];



  $query = mysqli_query($conn, "SELECT * FROM usuariofuncionario where Usuario = '".$nombre."' and password = '".$pass."'");

  $nr = mysqli_num_rows($query);

  if ($nr == 1)
{

	echo ":" . $nombre;


header("Location: accionesF.php");



}

else if ($nr == 0)
{

	echo "NO INGRESO";
} 


      
      
  ?>

  </form> 
 <form action="index.php" method="POST" class="form-register" >
       <input  type="submit" value="VOLVER" class="btn_Regis"> 
       </form>