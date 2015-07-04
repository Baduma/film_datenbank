<?php
require_once('../views/title.tpl.php');
?>

	

	<div id="form">
		<form id="myform" action="../controller/controller_frontend.php" method="get">

		<fieldset>
			<legend><h2>Regie Auswahl</h2></legend>
				<table width="50%">
	
					<tr>
						<td align="right"><label for="title"></label></td>
						<td><h4>Waehlen Sie bitte einen Regisseur aus</h4></td>
					</tr>
					<tr>
						<td align="right"><label for="regie"></label></td>
						<td><select name="regie" id="regie" >
					
						<optgroup label="Regie" >
						<option>Stanley Kubrick</option>
						<option>David Lynch</option>
						<option>Quentin Tarantino</option>
						<option>Ben Stiller</option>
						</select>
					
						
						<input type="submit" name="Abschicken" id="Abschicken" value="suchen" /></td>
			
					</tr>
				</table>
			</fieldset>
		</form>
		</div>
<?php
	require_once('../views/footer.tpl.php');
	?>
	
	

