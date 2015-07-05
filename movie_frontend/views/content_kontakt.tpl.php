<?php 
	if(!empty($_GET['anrede']) && !empty($_GET['name']) && !empty($_GET['email']) && !empty($_GET['betreff']) && !empty($_GET['message'])){
	
		echo "<strong>"."Hallo" ." " .$_GET['anrede'] ." " .$_GET['name'] ." " ."vielen Dank für Ihre Nachricht. Wir werden uns schnellstmöglich bei Ihnen melden.";
	}
?>

<html>
<body>
	<div id="form">
	<h2>Send us an email...</h2>

	<form action="#" method="get">
	<table width="100%">
		<tr>
			<td align="right"><label for="anrede">Anrede</label></td>
			<td><select name="anrede" >
				<option>Herr</option>
				<option>Frau</option>
				</select>
			</td>
		</tr>
	
		<tr>
			<td align="right"><label for="name">Name</label></td>
			<td><input type="text" id="name" name="name" size="30"  required placeholder="Vorname,Nachname"/></td>
		</tr>
		<tr>
			<td align="right"><label for="email" >E-mail</label></td>
			<td><input type="email" id="email" name="email" size="30" required placeholder="Email"/></td>
		</tr>
		<tr>
			<td align="right"><label for="email" >Betreff</label></td>
			<td><input type="text" id="email" name="betreff" size="30" required placeholder="Betreff"/></td>
		</tr>
		<tr>
			<td><label for="message">Nachricht</label></td>
				<td><textarea name="message" id="message"  required cols="50" rows="5" maxlength="10000"></textarea></td>
		</tr>
		<tr>
			<td>     </td>
			<td> <input type="submit" id="Abschicken" name="sendMessage" value="Absenden"  />
   				<input type="reset" id ="cancel" value="Abbrechen" /></td>
			
				 </tr>
	</table>
	</form>
	</div>
<body>
</html>
		