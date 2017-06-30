<?php

include "../config/config.php";

	$result = $mysqli->query( "SELECT * FROM products");
	while($row = $result->fetch_assoc()) {
// $photoarray = unserialize($row["img"]);

        echo '<div class="content_title" ><img class="cmsimg" src="img/'. $row["img"] .'"><h3>'. $row["title"] . '</h3>
			 <i class="fa fa-trash-o" aria-hidden="true" onclick="deleteProduct(' . $row["id"] . ')
			"></i>
            <i class="fa fa-pencil" aria-hidden="true" onclick="getData('. $row["id"] .')"></i>' .'</div>';}
		?>
