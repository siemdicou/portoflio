<?php 
session_start();
if (!isset($_SESSION['basket'])) {
    $_SESSION['basket'] = [];
}
else{
    $cartcount = count($_SESSION['basket']);
    if ($cartcount >= 1) {
    	echo $cartcount;
    }
   	
}


 ?>