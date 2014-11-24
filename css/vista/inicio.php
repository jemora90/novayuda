<form id="form2" name="form2" method="GET" action="home.php?pac=<?php echo $pac; ?>" onSubmit="return confirm('¿Eliminara El Parametro y sus Valores asociados desea continuar?')">
  
  <div align="center" class="zebra">
    <table width="550" border="1" cellspacing="0" cellpadding="4">

	<tr>
        <td class="style1" align="center" width="80">Cod. Parametro<input name="pac" type="hidden" id="pac" value="102" /></td>
        <td class="style1" align="center" width="160">Nombre Parametro</td>
        <td class="style1" align="center" width="60">Editar</td>																	   	</tr>