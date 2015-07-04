<! DOCTYPE html>
<html>
<head>
	<title>OOP-PHP-MYSQL</title>
<body bgcolor="lightblue">


	<div id="read">
	<h2>Read Data</h2>
	<label class="name">Titel:</label>
	<label ><?php echo $data['titel'];?></label><br><br>
	<label class="name">Regie:</label>
	<label ><?php echo $data['regie'];?></label><br><br>
	<label class="name">Schauspieler:</label>
	<label ><?php echo $data['schauspieler'];?></label><br><br>
	<label class="name">Genre:</label>
	<label ><?php echo $data['genre'];?></label><br><br>
	<label class="name">Beschreibung:</label>
	<label ><?php echo $data['beschreibung'];?></label><br><br>
	<label class="name">Land:</label>
	<label ><?php echo $data['land'];?></label><br><br>
	<label class="name">Jahr:</label>
	<label ><?php echo $data['jahr'];?></label><br><br>
	<label class="name">Laufzeit:</label>
	<label for=""><?php echo $data['laufzeit']." "."Min";?></label><br><br>
	
	<button type="button" onclick="history.back();">Zur&uumlck </button>
	</div>
<div id="footer">
		<div id="contact">
				<h3>Kontaktdaten</h3>
 				<p class="tel">017687634045</p>
				<p class="address">Spanheimstr. 5 – 13357 Berlin</p>
			</div>
			
				<p class="p1"> Champion Movie Database von S. Baduma Copyright - &copy; 2015 - <a class="link" href="impressum.php"> Impressum</a></p>
		</div>
		
	</body>	
	</html>