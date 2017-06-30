<?php


session_start();
include "../config/config.php";
if ($_SESSION["status"] = "Paid") {
	echo "uw betaling is gelukt";
	$name = $_SESSION['name']; 
    $lastname = $_SESSION['lastname'];  
    $email = $_SESSION['email'];
    $mobile = $_SESSION['mobile'];  
    $street = $_SESSION['street'];  
    $number = $_SESSION['number'];  
    $orderId = $_SESSION['orderId'];
    $products = $_SESSION['basket'];
    $date = date("d-m-Y");
    if (isset($_SESSION['add'])) {
    	$add = $_SESSION['add'];  
    }else{
    	$add = "";
    }
    $zip = $_SESSION['zip'];

$seralized = serialize($products);
$sql = "INSERT INTO orders (id,products,datum)
VALUES ('$orderId','$seralized','$date')";
$result = $mysqli->query($sql);



$msg="";

    $from_add = $email;

    $to_add = "joeysteffens@quicknet.nl"; //<-- put your yahoo/gmail email address here

    $subject = "Mail binnen van webshop";

//    include 'emailstyle.css';

    $header = "<body style='background-color: lightblue'><h1></h1>" . "<br><br>";


    $message =  $header . "" ."naam:<br>". $name . "<br>lastname:<br>" . $lastname ."<br>email:<br>". $email . "<br>Telefoon nummer<br>" . $mobile . "<br>adress:<br>". $street . $number . $add . "<br>postcode<br>" . $zip . "<br>orderId<br>" . $orderId;

    $headers = "From: $from_add \r\n";
    $headers .= "Reply-To: $from_add \r\n";
    $headers .= "Return-Path: $from_add\r\n";
    $headers .= "X-Mailer: PHP \r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    
    if(mail($to_add,$subject,$message,$headers))
    {
        $msg = "Mail sent OK";

    } 
    else 
    {
       $msg = "Error sending email!";
    }
    // header('Location:../../../../');
    echo $name, $lastname, $email, $street ,$number, $add, $zip;
} elseif ($_SESSION["status"] = "Open"){
	echo "Open";
} elseif ($_SESSION["status"] = "Cancel"){
	echo "Cancel";
}

header ("Location: http://www.joeysteffens.com/Jennybakker#gelukt");
?>