<?php
	include ("controlador/carea_empresarial.php");
//INSERT INTO `area_empresarial`(`id_area`, `nombre`, `nu_de_empleados`) VALUES ([value-1],[value-2],[value-3])
?>



<body>
<center>
<h1 align="center">Area Empresarial</h1>

	<form name="formempre" action="" method="post">
    	<table align="center">
    		<tr>
            	<td>
                <label>Nombre</label>
                </td>
                
            	<td>
                <input type="text" name="nombre"></input>
                </td>
            	<td>
                <label>No. de Empleados</label>
                </td>
                <td>
                <input type="text" name="nu_de_empleados"></input>
                </td>
            </tr>
            <tr>
            <td colspan="4" align="center">
            	<input type="submit" value="GUARDAR" id="env"></input>
            </td>
            </tr>
        </table>
    </form>
    
<h2 align="center">Areas Empresariales Activas</h2>
<form  name="formverarea" method="get" action="" onSubmit="return confirm('¿Desea eliminar?')">
  
   <div align="center" class="zebra">
    <table width="650" border="1" cellspacing="0" cellpadding="4">

      <tr>
        <td class="style1" align="center" width="160">No. Area</td><input name="pac" type="hidden" id="pac" value="103" /></td>
        <td class="style1" align="center" width="160">Nombre</td>
        <td class="style1" align="center" width="160">No de Empleados</td>
        <td class="style1" align="center" width="60">Editar</td>
      </tr>
         <?php 	
 	//Select
		$dat = $ins->selarea_empresarial();
		for ($i=0; $i < count($dat); $i++){
	  ?>
        <tr>
           
		    <td class="style2" align="center"><input type="submit" name="del" value=<?php echo $dat[$i]['codigo_area_empre']?>></td>
            <td class="style2" align="left"><?php echo $dat[$i]['nombre'] ?></td>
             <td class="style2" align="left"><?php echo $dat[$i]['nu_de_empleados'] ?></td>
            <td align="center"><a href="home.php?pr=<?php echo $dat[$i]['codigo_area_empre'] ?>&pac=103&up=11"><img border=0 src="image/editar.png" width="16" height="16" /></a></td>
		
        </tr>
      <?php  }  ?>
 
         <tr>
		    <td colspan=8 class="style2">Para eliminar presione el n&uacute;mero del c&oacute;digo.</td>
        </tr>
    </table>
    <p>&nbsp; </p>
  </div>
</form>
</center>