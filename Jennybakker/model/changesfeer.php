<?php

session_start(); 

require '../config/config.php';
$id = $_POST['id'];
$content 	= htmlentities($_POST['content']);
$category 	= htmlentities($_POST['category']);

$date = date("YmdHis");

$valid_formats = array("jpg", "png", "gif", "zip", "bmp", "JPG", "jpeg");
$max_file_size = 1024*6000; //100 kb
// $path = "http://www.joeysteffens.com/Jennybakker/uploads/";
$path = "../img/";
 // Upload directory
$count = 0;

$profilepicture = $_FILES["files"]["name"][0];


$newfilename = $date."_".$profilepicture;

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to execute all files
	foreach ($_FILES['files']['name'] as $f => $name) {     
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) {	           
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files 

	        	// $name_of_file=uniqid().".".$ext;
	            move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$newfilename);
	            	$count++; // Number of successfully uploaded files
	        }
	    }
	}
}

$sql = "UPDATE sfeerfotos SET content = '$content' , category = '$category', img = '$newfilename' WHERE id = '$id'";
echo $sql;
// var_dump($sql);
$result = $mysqli->query($sql);
// $_SESSION['status'] = "update";
header("Location: ../index.php?page=admin&action=sfeer");


?>