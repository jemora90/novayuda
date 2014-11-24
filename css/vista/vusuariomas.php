<?php include ("controlador/cusumas.php"); 
?>

<center>
<form name="formusumas" action="home.php?pac=105" method="post" enctype="multipart/form-data">
    <span class="TextoTitulo">INGRESO MASIVO DE USUARIO</span><br/><br/><br/>
    <center><b>Por favor primero seleccione el archivo .csv</b>
    <center><b>y despu&eacute;s cargue el archivo :</b>  </br></br>
    <input name="archivo" type="file" size="35" />
    <input name="enviar" type="submit" value="Cargar Archivos" />
    <input name="action" type="hidden" value="upload" />
    
    <img src="image/precarga.gif" width="1" height="1">
</form>
</br></br></br></br>
<form name="form2">
<a href="archivo/Usumas.xlsx" style="font-size:12px; text-decoration:none; color:black; font-weight:bold">Descargar Plantilla<br/><br/><img src="image/excel.gif"/></a>
</br></br></br
><table width="500px" height="300px">
<tr>
<td>
<img src="image/fexcel.jpg"/>
</tr>
</td>
</form>
</center>