<div align="center">
    <p id="tit">Ingrese Aqui</p>
    <form id="form1" name="form1" method="post" action="modelo/mcontrol.php">
		<table width="300"  align="center" class="Table">
			<tr>
			<td colspan="2" align="center">
            
				<?php
				$ErrUsu = isset($_GET["errorusuario"]) ? $_GET["errorusuario"] : NULL;
				if (strcmp($ErrUsu,"si") == 0){
					echo "<span style=\"color:white\"><b>Datos incorrectos</b></span>";
				}else{
					echo "<span style=\"color:white; font-size:14;\"></span>";
				}
				?>
			</td>
			</tr>
            <tr>
            <td colspan="2" align="center">
            </td>
			<tr>
			  <td><div align="left"><img border=0 src="image/usuario.png" width="40" height="40"/></div></td>
			  <td><div align="center">
			    <input name="username" type="text" id="CampoTxt" maxlength="30" size="21" placeholder="Usuario" />
		      </div></td>
			</tr>
		  <tr>
			<td><div align="left" style="color:white"><img border=0 src="image/password.png" width="40" height="40" align="left"/></div></td>
			  <td>
			    <div align="center">
			      <input name="password" type="password" id="CampoTxt" maxlength="30" size="21" placeholder="Contrase&ntilde;a"/>
		        </div>
                </td>
	        </td>
			</tr>
		</table>
        <table width="50" border="0" cellspacing="2" cellpadding="4">
          <tr>
			  <td><input name="Login" type="submit" id="boton" value="Ingresar" /></td>
              <td><input name="Cancela" type="reset" id="boton" value="Cancelar"/></td>
			</tr>
        </table>
		<br/>
        <br/>
        <!--<div id="olvido">
        	<a href="index.php?pac=131" style="text-decoration:none; color:#FC5B04;">�Olvido su contrase�a?</a><br />
        </div>
       <div style="width:280px; height:20px; float:left">&nbsp;</div>
        <div id="olvido">    
			<a href="index.php?pac=130" style="text-decoration:none; color:#FC5B04;">Registrarse</a>-->
        </div>
        <br/>
	  </form>
	</div>