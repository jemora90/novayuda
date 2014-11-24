<?php
include ("controlador/cincidente.php");
//SELECT `id_incidente`, `prioridad_id`, `descripcion`, `calificacion_id`, `categoria_id`, `estado_id`, `fecha_creacion`, `fecha_vencimiento`, `usuario_id` FROM `incidente` WHERE 1

?>

<link rel="stylesheet" type="text/css" href="../css/style.css" />

<h1 align="center">Nuevo Incidente</h1>
	<form name="forinc"  action="home.php?pac=106" method="post" >
    	<table align="center">
    		<tr>
            	<td>
                	<label>Fecha de Emision</label>
                </td>
                <td>
                 
               	 <input type="date" name="fecha_creacion" ></input>
                 <input type="hidden" name="fecha_vencimiento" value="select now();" ></input>
                </td>
                
                <td>
                	<label>Categoria</label>
                </td>
                <td>
                 <select name="categoria_id" id="categoria_id">
                              <option>Seleccione</option>

							 <?php 
							//Select
									for ($i=0; $i < count($dat1); $i++){
								?>
									<option value="<?php echo $dat1[$i]['id_categoria'] ?>"><?php echo $dat1[$i]['nomcategoria'] ?></option>
								<?php } ?>
            	   </select>
                  <input type="hidden" name="estado_id" value="8"></input>

                </td>
            </tr>
            <tr>
            	<td>
                <label>Descripcion</label>
                </td>
            </tr>
            <tr>
            	<td colspan="4">
                <input type="hidden" name="prioridad_id" value="5"></input>
                <textarea id="cuadro" name="descripcion"></textarea>
                <input type="hidden" name="calificacion_id" value="14" ></input>

                
                </td>
            </tr>
            <tr>
            	<td align="center" colspan="4">
            	<input type="submit" value="ENVIAR" id="env"></input>
                </td>
            </tr>
        </table>
    </form>
