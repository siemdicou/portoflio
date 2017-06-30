<?php 
session_start();
	$del_val = $_GET['delClicked'];
	$del_val = intval($del_val);
	// $del_val = 5;

// $id	= 47;
// $del_val  = 5;
// $key= 3;

$array = $_SESSION['basket'];
var_dump($array);
foreach (array_keys($array, $del_val, true) as $key) {
    unset($array[$key]);
    
    break;
}
$array = array_values(array_filter($array));
var_dump($array);
$_SESSION['basket'] = $array;
 ?>