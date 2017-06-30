<?php 


 $sql =  "SELECT * FROM orders ORDER BY id DESC";
 $result = $mysqli->query($sql);
 $row = $result->fetch_assoc();
 $orderId = $row["id"] + 1;
 // var_dump($orderId);
 // echo $orderId;




 ?>