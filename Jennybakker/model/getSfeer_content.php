<?php
require '../config/config.php';
	$clicked = 1;
	$clicked = $_GET['clicked'];
	$result = $mysqli->query( "SELECT * FROM sfeerfotos WHERE id= $clicked");

	$row = $result->fetch_assoc();

	echo  '<h3>Sfeerfoto aanpassen</h3>
		<form action="model/changesfeer.php" method="POST" enctype="multipart/form-data">'.
		$row["category"].'<br><Br>
		<input type="hidden" name="category" value='.$row["category"].'>
		<textarea rows="8" cols="100" placeholder="content" name="content">'. $row["content"].'</textarea>
		<Br><Br>
			<input type="file" name="files[]" multiple="multiple" accept="image/*" required>
			<br>
		<img src="img/'. $row["img"].'">
		<input type= "hidden" value="'. $row["id"].'" name="id">
		
		<br><Br>
		<input type= "submit" value="aanpassen">
		
		</form>';


?>

<!-- <input type="button" name="annuleren" value="annuleren" onclick="makeNew()"> 
		<input type="submit" name="toevoegen" value="aanpassen"> -->