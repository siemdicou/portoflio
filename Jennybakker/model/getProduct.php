<?php 
// session_start();
// var_dump($_SESSION['basket']);



	$result = $mysqli->query( "SELECT * FROM products");
	while($row = $result->fetch_assoc()) {
        	echo'<div class="tile scale-anm col-md-4 all '.$row["category"].'">
        			<a href="index.php?page=singleproduct&id='.$row['id'].'">
			        <img src="img/'.$row['img'].'"></a>
			        <h2>'.$row["title"]. '</h2>
			        <button onclick="pushArray('.$row["id"].')"><i class="fa fa-2x  fa-cart-plus" aria-hidden="true"></i></button></div>
			        ';
			        
}
// <span>'.$row["short"].'</span>'
// 			        <a href="product pagina .php?id='.$row["id"].'"><button type="button">lees meer</button></a>
			        // <button onclick="myAjax('. $row["id"].')">voeg toe</button>
	 		 	 // </div>'

?>
<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">

<script src="sweetalert-master/dist/sweetalert.min.js"></script>


<script type="text/javascript">
function pushArray(id) {
	console.log(id);
      $.ajax({
           type: "POST",
           url: 'model/pushArray.php?id='+ id
      });
      swal({ 
    	title: "Product toegevoegd aan winkelmandje",
    	html: true,
    	timer:1250
	});

 }
</script>

