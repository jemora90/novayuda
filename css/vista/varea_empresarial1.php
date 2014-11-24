<?php
	include ("controlador/carea_empresarial.php");
//INSERT INTO `area_empresarial`(`id_area`, `nombre`, `nu_de_empleados`) VALUES ([value-1],[value-2],[value-3])
?>
<body>
<h1 align="center">Area Empresarial</h1>

	<form name="formempre1" action="home.php?pac=103" method="post">
    	<table align="center">
    		<tr>
            	<td>
                <label>Nombre</label>
                <input type="hidden" name="codigo_area_empre" size="30" maxlength="50" required value="<?php echo $date[0]['codigo_area_empre']?>"></input>
                <input type="hidden" name="actu" value="actu" />
                </td>
            	<td>
				<input type="text" name="nombre" size="30" maxlength="20" required value="<?php echo $date[0]['nombre'] ?>"></input>			
                </td>
            	<td>
                <label>No. de Empleados</label>
                </td>
                <td>
                <input type="text" name="nu_de_empleados" size="30" maxlength="20" 
                required value="<?php echo $date[0]['nu_de_empleados'] ?>" />
                </td>
            </tr>
            <tr>
            <td colspan="4" align="center">
            	<input type="submit" value="GUARDAR" id="env"></input>
            </td>
            </tr>
        </table>
    </form>
</body>