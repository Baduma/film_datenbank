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
			<div id="insert">
			<h2>Edit new data</h2>
					<form class="form-horizontal" action="../controller/film_controller.php" method="post">
                     
                        <label class="control-label">Titel:</label>
                        <div class="controls">
                            <input name="titel" type="text"  placeholder="Titel" required>
                        </div>
                       
                      <div class="control-group" >
					  
                        <label class="control-label">Regie:</label>
                        <div class="controls">
                            <input name="regie" type="text"  placeholder="Regie" required >
                        </div>
                      </div>
                      <div class="control-group >
					  
                        <label class="control-label">Schauspieler:</label>
                        <div class="controls">
                            <input name="schauspieler" type="text" placeholder="Schauspieler" required >
                            
                        </div>
						<label class="control-label">Genre:</label>
                        <div class="controls">
                            <input name="genre" type="text"  placeholder="Genre" required>
                            
                         </div>
						 <label class="control-label">Beschreibung:</label>
                        <div class="controls">
                            <input name="beschreibung" type="text"  placeholder="Beschreibung" required>
                            
                         </div>
						 <label class="control-label">Land:</label>
                        <div class="controls">
                            <input name="land" type="text"  placeholder="Land" required>
                            
                         </div>
						 <label class="control-label">Jahr:</label>
                        <div class="controls">
                            <input name="jahr" type="text"  placeholder="Jahr" required>
                            
                         </div>
						 <label class="control-label">Laufzeit:</label>
                        <div class="controls">
                            <input name="laufzeit" type="text"  placeholder="Laufzeit" required>
                            
                         </div>
						</div><br>
                      <div class="form-actions">
                          <h2><input type="submit" name="absenden" value="Einfuegen">
                          <button type="button" onclick="history.back();">Zur&uumlck </button>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
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