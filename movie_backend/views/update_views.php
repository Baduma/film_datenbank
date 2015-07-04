
<!DOCTYPE html>

<html>

<head> 
		<title>Update Data</title>
</head>
	
<body bgcolor="lightblue">

	<div id="update">
	<h2>Update Data</h2>
	<form action="film_controller.php" method="get">
	<table width="100%">
			<tr>	
				<td align=""><label for="titel">Titel</label>
				<input type="text" id="titel" name="titel" size="50"  value="<?php echo $data['titel'];?> "/></td>
			</tr>
			<tr>
				<td align=""><label for="regie">Regie</label>
				<input type="text" id="regie" name="regie" size="50"  value="<?php echo $data['regie'];?>"/></td>
			</tr>
			<tr>
				<td align=""><label for="schauspieler" >Schauspieler</label>
				<input type="schauspieler" id="email" name="schauspieler" size="50" value="<?php echo $data['schauspieler'];?>"/></td>
			</tr>
			<tr>
				<td align=""><label for="genre">Genre</label>
				<input type="text" id="genre" name="genre" size="50"  value="<?php echo $data['genre'];?>"/></td>
			</tr>
			<tr>
				<td align=""><label for="beschreibung">Beschreibung</label>
				<input type="text" id="beschreibung" name="beschreibung" size="50"  value="<?php echo $data['beschreibung'];?>"/></td>
			</tr>
			<tr>
				<td align=""><label for="land">Land</label>
				<input type="text" id="land" name="land" size="50"  value="<?php echo $data['land'];?>"/></td>
			</tr>
			<tr>
				<td align=""><label for="jahr">Jahr</label>
				<input type="text" id="jahr" name="jahr" size="50"  value="<?php echo $data['jahr'];?>"/></td>
			</tr>
			<tr>
				<td align=""><label for="laufzeit">Laufzeit</label>
				<input type="text" id="laufzeit" name="laufzeit" size="50"  value="<?php echo $data['laufzeit']." " ."Min";?>"/></td>
			</tr>
			
			
			<tr>
				<td><input type="hidden" name="id" value="<?php if(isset($id)){echo $id;}?>"></td>
			</tr>
			<tr>
			<td align=""><h3><input type="submit" name="absenden" value="Update"> <button type="button" onclick="history.back();">Zur&uumlck </button> </h3></td>
			</tr>
			
		</table>
		</form>
</body>
</html>
