<?php 

require '../config/config.php';
	$clicked = $_GET['clicked'];
	$result = $mysqli->query( "SELECT * FROM products WHERE id= $clicked");

	$row = $result->fetch_assoc();
	$photoarray = unserialize($row["images"]);

	echo  '<h3>Product aanpassen</h3>
		<form action="model/changeproduct.php" method="POST" enctype="multipart/form-data">
		<input type="text" value="'. $row["title"].'" placeholder="title" name="title">
		<input type="text" value="'. $row["content"].'" placeholder="content" name="content">
		<input type="number" value="'. $row["amount"].'" placeholder="amount" name="amount">
		<input type="text" value="'. $row["category"].'" placeholder="category" name="category">
		<input type="text" value="'. $row["price"].'" placeholder="price" name="price">
		<input type="text" value="'. $row["size"].'" placeholder="size" name="size">
		<br>
		<br>
		<input type="hidden" name="id" value="'. $row["id"].'">
 <p>single image upload</p>
        <input type="file" name="filess[]" accept="image/*">
        <br>
        <br>
		<img src="img/'. $row["img"] .'">
			<br><br>
			<p>Multiple image upload</p>
        <input type="file" name="files[]" multiple="multiple" accept="image/*">
        <br><br>';

$photoarray = unserialize($row["images"]);
$countimage = count($photoarray);

$count = 0;
	while ($count < $countimage){
		

		echo "<img src='img/" . $photoarray[$count] . "'>";

$count++;
	}

			echo '
        
       
			
		<br>
		<Br>
		<input type="button" name="annuleren" value="annuleren" onclick="makeNew()"> 
		<input type="submit" name="toevoegen" value="aanpassen">
		</form>';
?>