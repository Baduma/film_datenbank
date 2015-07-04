<!--views_benutzer----->
<!DOCTYPE html>
<html>

	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Home Movie Database</title>
		<meta name="author-personal" content="Baduma" />
		<meta name="author-mail" content="mailto:baduma@champion.de" />
     
		<meta name="description" content="Vortsellung und Verwaltung der Filmmdatenbank." />
     
		<meta name="language" content="de" />
		
		<link rel="stylesheet" type="text/css" href="style_movie.css" /> 
	</head>
	
	<body>
	
		<div id="title">
			<h1> Champion Movie Database</h1>
		</div>
			<hr>
		
		<div id="login">
		
	
	
		<h2>Login(Admin)</h2>

		<form action="../controller/film_controller.php" method="post" >

		<table width="100%">
			<tr>
				<td align="right">
					<label for="pname">Nutzername:</label>
				</td>
				<td>
					<input type="text" name="pname" maxlength="20" placeholder="Benutzername" size="30" required />
				</td>
			</tr>
			
			<tr>
				<td align="right">
					<label for="ppasswort">Passwort:</label>
				</td>
				<td>
					<input type="password" name="ppasswort" maxlength="20" size="30" placeholder="Passwort" required />
				</td>
			</tr>
			<tr>
				<td>     </td>
				<td>
					<input type="submit" id="abschicken" name="abschicken" value="Anmelden" />
						
				<input type="reset" id="abbrechen" name="abbrechen" value="Abbrechen" width="50px" /></td>
			</tr>
									
		</table>
		</form>
		
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