<?php 

session_start();


include '../config/config.php';
	//lees sesion session_basket uit 
	$basket = $_SESSION['basket']; 
	// $basket = [1,5];

	// var_dump(explode(',', $basket));
	$i = 0;
	// $counts = 
	$bla =  [];
	$count = count($basket);
	// var_dump($count);
	while ($count > $i) {
		$sql = ( "SELECT * FROM products WHERE id = $basket[$i]");
		$result = $mysqli->query($sql);
		$i++;
		$row = $result->fetch_assoc();
		array_push($bla, $row);
	}
	$count3 =  count($bla);
	
	$b = 0;
	$c = 0;
	while ($count3 > $b) {

		echo '

			<img src="img/'.$bla[$b]['img'].'"><h3>'.$bla[$b]['title'].'</h3>'.

			 "<p>".$bla[$b]['content']."</p>".
			 "<Br>".
			 $bla[$b]['amount'].

			 "<Br>
			 <div id='price'>".
				$bla[$b]['price'].
			'</div>
			 <Br>' .
			 $bla[$b]['size'] .
			 '<Br>
			 <button onclick="delCart('.$bla[$b]['id'] .')">verwijderen</button>
			 </div><hr>';
		$c = $c + $bla[$b]['price'];
		$b++;
	}
	if ($basket == []) {
		echo "Uw winkelmandje is leeg";
	}
	else{
	echo "<div id='cash'>".$c."</div>";
	}
	// echo $sql;	
	// $result->query($sql);

	// $row = $result->fetch_assoc();
	// while($row = $result->fetch_assoc()) {
 //        echo '<h3 class="content_title" onclick="getData('. $row["id"] .')">'.$row["title"].'</h3>';}
?>
