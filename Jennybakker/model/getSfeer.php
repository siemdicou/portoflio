<?php


require '../config/config.php';
	$result = $mysqli->query( "SELECT * FROM sfeerfotos");
	while($row = $result->fetch_assoc()) {

        echo '<div class="content_title" ><img class="cmsimg" onclick="getsfeerData(' . $row["id"] . ')" src="img/' . $row["img"] . '">' .
        $row["category"] . '</div>';


        };
		?>


