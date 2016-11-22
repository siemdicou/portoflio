<?php 
include 'config.php';
include 'connectie.php';
$clicked = "bla";

$sql = "SELECT * FROM work WHERE name = '$clicked'";

    $result = $mysqli->query($sql);
    $row = mysqli_fetch_assoc($result);
    echo $row["img"];
    echo $row["story"];
    echo $row["img"];
    
 ?>