<! DOCTYPE html>
<html>
	<head>
		<title>Suche</title>
	</head>
	<body>
	
		<div id="anz_regie">	
		
			<?php
				require_once('../views/title.tpl.php');
				echo "<br>";
				echo "<b><h2>Suchergebnis (".$regie ."):" ." " .$anz ."</h2>";
				foreach($data as $dataValue){
					echo '<a href="../controller/controller_frontend.php?action=anzeigen&id='. $dataValue['id'] ." <b>".'">' .'<h4>' .'>' .$dataValue['titel'] ."</a>" ."<br>";
				}
			?>
			
		</div>
	</body>
</html>
	