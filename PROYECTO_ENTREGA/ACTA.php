

<html>
<head>
 <meta charset="utf-8">
<title>Formulario Registro de Prendas</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<link href="estiloNuevo.css" rel="stylesheet" type="text/css">
</head>

<body>
  </td>
  <center>
 
      <table width=\"180%\" border=5\"2\" color=\"white\">

       
      <center><tH Colspan="3">FORMATO DE ACTA UNIVERSIDAD DE CORDOBA</tH></center>
             
          
                 
                 <form action="registro.php" method="POST">
    
          <tr>  
            <tr> <td colspan="3"><center><label>Codigo Acta.:</label><br>
        <input type="text" name="codigoActa" /><br> </center>  </td> 
      </tr>

                     <tr>   <td colspan="1"><label>Lugar:</label><br>
        <CENTER> <input type="text" name="lugar" /><br></CENTER></td> 

        <center> <td colspan="1"><label>Fecha:</label> <input type="date" id="start" name="fecha"
       value="2022-01-01"
       min="2022-01-01" max="2030-12-31"></td>    </center>            
                                    </tr> 


                <TR>

                  <td Colspan="2"><label>Nombre de Creador:</label><br>
        <CENTER><input type="text" name="nombreCreador" /><br></CENTER></td> 

       <td Colspan="1"><label>Cargo:</label><br>
        <CENTER><input type="text" name="cargo" /><br>  </td></CENTER> </TR>

<td Colspan="1"><label>Tema:</label><br>
       <input type="text" name="tema" /><br>  </td>  <td Colspan="2"><label>Compromisos:</label><br>
        <CENTER><textarea name="Compromisos" rows="5" cols="30"></textarea>  </td> </TR>

       <TR> <td Colspan="3"><label>Desarrollo:</label><br>
        <center><textarea name="Desarrollo" rows="3" cols="40"></textarea> </center> </td> </TR>




 <td Colspan="2"><label>Asistentes:</label><br>
        <CENTER><input type="textarea" name="asistentes" /><br></CENTER></td> 

       <td Colspan="1"><label>Sede:</label><br>
        <CENTER><input type="textarea" name="sede" /><br>  </td></CENTER> </TR>


       <TR> <td Colspan="3"><label>Observaciones:</label><br>
        <center><textarea name="observaciones" rows="5" cols="40"></textarea> </center> </td> </TR>

<TR> <td Colspan="2"><label>Hora de Inicio:</label><br>
       <center>  <input type="time"name="horaInicio">  </td></center>

        <td Colspan="2"><label>Hora de Finalización:</label><br>
       <center> <input type="time" name="horaTerminacion">  </td>  </TR></center>

        <TR> <td Colspan="3"><label>Estado:</label><br>
        <center>Selecciona la opción deseada:
  <select name="estado">
    <!-- Opciones de la lista -->
    <option value="1">Por Iniciar</option>
    <option value="2" selected>Iniciado</option> <!-- Opción por defecto -->
    <option value="3">En Proceso</option>
    <option value="3">Terminada</option>
  </select>

  <input  type="submit" value="GUARDAR" class="btn_Regis"> 
        
       
    </form>
  </center>
  <CENTER>
<form action="ACTA.php" method="POST" class="form-register" >
         <button type="submit"> VOLVER</button>
        <br><br>
       </form>
       </CENTER>
  </td>
    <tr>
  </table>
    </center>
</body>
</html>
<center>
<h2>Por Favor, LLenar los Datos Requeridos para que su Registro sea Exitoso</h2>
  </center>