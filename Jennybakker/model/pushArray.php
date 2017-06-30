<?php 
session_start();
$id = $_GET['id'];
$id2 = intval($id);

if (!isset($_SESSION['basket'])) {
	$_SESSION['basket'] = [];
}

	// $_SESSION['basket'] = [];
	array_push($_SESSION['basket'], $id2);
	var_dump($_SESSION['basket']);
	// var_dump($_SESSION['basket']);
 ?>