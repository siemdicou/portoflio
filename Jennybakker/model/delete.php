<?php 

include '../config/config.php';
$id = $_GET['id'];
$mysqli->query( "DELETE FROM products WHERE id  = '$id'");
 ?>
