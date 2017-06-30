<head><meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Your Website Title" />
	<meta property="og:description"   content="Your description" />
	<meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" /></head>
<?php





$productId = $_GET['id'];


$sql = "SELECT * FROM products WHERE id = $productId";
$result = $mysqli->query($sql);
$product = $result->fetch_assoc();

	echo '<div class="container productcont">';

	echo '<h1>';
	echo $product['title'];
	echo '</h1>';

	echo '<div class="produimg">';
	echo '<img src=img/' . $product['img'] . '>';
	echo '</div>';

	echo '<p> Content: ';
	echo $product['content'] . '</p>';

	// echo '<h2> Op voorraad: ';
	// echo $product['amount'] . '</h2>';
	echo '<p> Categorie: ';
	echo $product['category'] . '</p>';
	echo '<p> Prijs: ';
	echo $product['price'] . '</p>';
	echo '<p> Grootte: ';
	echo $product['size'] . '</p>';
	echo '<button onclick="pushArray('.$product["id"].')"><i class="fa fa-2x  fa-cart-plus" aria-hidden="true"></i></button>';
	echo '</div>';




$photoarray = unserialize($product["images"]);
$countimage = count($photoarray);
echo '<div class="moreImg"> ';
$count = 0;
	while ($count < $countimage){
		echo "<img src='img/" . $photoarray[$count] . "'>";
$count++;
		
	}

    echo '</div><div class="social">
                <a href="https://www.facebook.com/jenny.bakker.7" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                <a href="https://www.instagram.com/jenny_bakker_illustration/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                <a href="https://www.pinterest.com/jennbakker13/" target="_blank"><i class="fa fa-pinterest fa-2x"></i></a>
                	</div>'

?>
<div class="fb-share-button" 
		data-href="http://www.your-domain.com/your-page.html" 
		data-layout="button_count">
	</div>
            
 <div id="fb-root"></div>

<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>


<script type="text/javascript">
function pushArray(id) {
	console.log(id);
      $.ajax({
           type: "POST",
           url: 'model/pushArray.php?id='+ id
      });

 }

	
	// <!-- Your share button code -->

</script>
