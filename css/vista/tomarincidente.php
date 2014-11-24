<?php
include ("controlador/cincidente.php");
//SELECT `id_incidente`, `prioridad_id`, `descripcion`, `calificacion_id`, `categoria_id`, `estado_id`, `fecha_creacion`, `fecha_vencimiento`, `usuario_id` FROM `incidente` WHERE 1

?>
<h2 align="center">Lista de Incidentes</h2>

<form id="tomarin" name="tomarin" method="GET" action="">
  
  <div align="center">
  
    <table width="550" border="1" cellspacing="0" cellpadding="4">

      <tr>
        <td class="style1" align="center" width="80">Codigo<input name="pac" type="hidden" id="pac" value="107" /></td>
        <td class="style1" align="center" width="160">Categoria</td>
        <td class="style1" align="center" width="160">Estado</td>
        <td class="style1" align="center" width="160">Autor</td>
        <td class="style1" align="center" width="160">Fecha de Creacion</td>     
        <td class="style1" align="center" width="60">Tomar</td>
        </tr>
 <?php 
 	//Select
		$dat = $ins->selinc();
		for ($i=0; $i < count($dat); $i++){
	  ?>
        <tr>
           
		    <td class="style2" align="center"><input type="button" value=<?php echo $dat[$i]['id_incidente']?>></td>
            <td class="style2" align="left"><?php echo $dat[$i]['categoria'] ?></td>
            <td class="style2" align="left"><?php echo $dat[$i]['valor'] ?></td>
            <td class="style2" align="left"><?php echo $dat[$i]['usuario_id'] ?></td>
            <td class="style2" align="left"><?php echo $dat[$i]['fecha_creacion'] ?></td>
            <td align="center"><a href="home.php?pr=<?php echo $dat[$i]['id_incidente'] ?>&pac=107&up=11"><img border=0 src="image/editar.png" width="16" height="16" /></a></td>	
        </tr>
      <?php  }  ?>
 
         <tr>
		    <td colspan=8 class="style2">Para eliminar presione el n&uacute;mero del c&oacute;digo.</td>
        </tr>
    </table>
    <p>&nbsp; </p>
  </div>
</form>

