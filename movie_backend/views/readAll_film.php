<! DOCTYPE html>
<html>
<head>
	<title>Movie DB</title>
</head>
<body bgcolor="lightblue">
<br><br>
	<table border="10" cellspacing="3" cellpadding="5" width="90%">
		<tr>
			<th bgcolor="white">ID</th>
			<th bgcolor="white">Titel</th>
			<th bgcolor="white">Regie</th>
			<th bgcolor="white">Schauspieler</th>
			<th bgcolor="white">Genre</th>
			<th bgcolor="white">Beschreibung</th>
			<th bgcolor="white">Land</th>
			<th bgcolor="white">Jahr</th>
			<th bgcolor="white">Länge</th>
			<th bgcolor="white" colspan="8">Action</th>
		</tr> 
		
<?php
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
		<td bgcolor="white" ><?php echo $dataValue['laufzeit']." " ."Min";?></td>
		<div id="read"><td bgcolor="#009933" color="white"><a style="color:white;font-size:23px;text-decoration:none;" href="film_controller.php?action=read&id=<?php echo $dataValue['id'];?>">read</a></td></div>
		<div id="update"><td bgcolor="#0099FF"><a style="color:white;font-size:20px;text-decoration:none;" href="film_controller.php?action=update&id=<?php echo $dataValue['id'];?>">update</a></td>
		<div id="delete"><td bgcolor="#FF3399"><a style="color:white;font-size:20px;text-decoration:none;" href="film_controller.php?action=delete&id=<?php echo $dataValue['id'];?>">delete</a></td>
	</tr>
	
<?php 
}	
?>
<tr><td colspan="15" align="center" bgcolor="#6600CC";><a style="color:white;font-size:30px;text-decoration:none;" href="../views/insert_views.php"><b>Insert new Data</b></a></td></tr>
	</table>
	<a href="?action=logout">Logout</a>
	
</body>
</html>

