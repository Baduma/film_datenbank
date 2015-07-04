<! DOCTYPE html>
<html>
<head>
	<title>Movie DB</title>
</head>
<body bgcolor="">
	<div>
	<table border="5" cellspacing="3" cellpadding="5" width="95%" >
		<tr>
			<th bgcolor="white">ID</th>
			<th bgcolor="white">Titel</th>
			<th bgcolor="white">Regie</th>
			<th bgcolor="white">Schauspieler</th>
			<th bgcolor="white">Genre</th>
			<th bgcolor="white">Beschreibung</th>
			<th bgcolor="white">Land</th>
			<th bgcolor="white">Jahr</th>
			<th bgcolor="white">Laufzeit</th>
			
		</tr> 
<?php
 echo "<br>";
		foreach($data as $dataValue){
?>
	<tr>
		<td bgcolor="white"><?php echo $dataValue['id'];?></td>
		<td bgcolor="white"><?php echo $dataValue['titel'];?></td>
		<td bgcolor="white" ><?php echo $dataValue['regie'];?></td>
		<td bgcolor="white"><?php echo $dataValue['schauspieler'];?></td>
		<td bgcolor="white" ><?php echo $dataValue['genre'];?></td>
		<td bgcolor="white" ><?php echo $dataValue['beschreibung'];?></td>
		<td bgcolor="white" ><?php echo $dataValue['land'];?></td>
		<td bgcolor="white" ><?php echo $dataValue['jahr'];?></td>
		<td bgcolor="white" ><?php echo $dataValue['laufzeit']." "."Min";?></td>
		</tr>
	
<?php
}
?>
</div>

</body>
</html>	


