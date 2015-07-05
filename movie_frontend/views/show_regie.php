<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	
	<body>

	<div id="film_info">
	
		<?php

		//require_once('../views/title.tpl.php');
		echo "<br>";
		foreach($data as $datakey => $dataValue){?>
		
		<img src="../views/image/<?php echo $dataValue['bild'];?>" width="200" height="150" />
		
		 <b>Titel:</b> <?php echo $dataValue['titel']; ?> <br><br>
		 <b>Regie:</b> <?php echo $dataValue['regie']; ?> <br><br>
		 <b>Schauspieler:</b> <?php echo $dataValue['schauspieler']; ?> <br><br>
		 <b>Genre:</b> <?php echo $dataValue['genre']; ?> <br><br>
		 <b>Filmbeschreibung:</b> <?php echo $dataValue['beschreibung']; ?> <br><br>
		 <b>Land:</b> <?php echo $dataValue['land']; ?> <br><br>
		 <b>Jahr:</b> <?php echo $dataValue['jahr']; ?> <br><br>
		 <b>Laufzeit:</b> <?php echo substr($dataValue['laufzeit'],0,3); ?> Minuten<br><br></h3>
		 
			<?php
				}
			?>
	</div>	
</body>
</html>	 
		 





