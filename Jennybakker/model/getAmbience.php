<?php 

	$result = $mysqli->query( "SELECT * FROM sfeerfotos");
	while($row = $result->fetch_assoc()) {
        	echo'<div class="tile scale-anm all sierf '.$row["category"].'">
			        <img src="img/'.$row['img'].'">
			        ';
			        echo "<BR>";
			        echo '</div>';
			    echo '<div class="sfeertext ' .$row["category"]. '">' . $row['content'] . '</div>';}
 ?>
<!--  <div class="sfeertext cards books jewelry lifestyle cadeaus workshops">Het leuke van een boek rechtstreeks bij mij als maker kopen, is dat je er naar wens een persoonlijke boodschap en handtekening in kan laten zetten. Ook is het mogelijk om van een aantal van mijn boeken vertalingen te bestellen, oa in het Engels, Chinees, Spaans, Tjechisch en Deens. Leuk om een bepaalde taal te leren of om cadeau te doen aan iemand in het buitenland.</div> -->