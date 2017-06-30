<!DOCTYPE html>
<html lang="en">

<head>

<?php
require 'config/config.php';

?>

<script type="text/javascript">
setInterval(function(){ 
    console.log("hi");         
    var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("cartCounter").innerHTML = xhttp.responseText;


            }
        };
        xhttp.open("GET", "model/checkBasket.php", true);
        xhttp.send();
    }, 100);


    // var clicked = document.getElementById("").click
 

</script>


    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Jenny Bakker</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap Css -->
    <link href="views/bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
    <link href="views/plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="views/plugins/Icons/et-line-font/style.css" rel="stylesheet">
    <link href="views/plugins/animate.css/animate.css" rel="stylesheet">

    <link href="views/css/main.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Java lol -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


</head>

<body>

    <!-- Header
    ============================================= -->

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo/logo.png" class="img-responsive" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav main-nav">
                        <?php if (isset($_SESSION['login_user'])){
    echo '<li><a href="index.php?page=admin" class="page-scroll">Admin</a></li>';
};?>
                            <li><a href="index.php?page=home" class="page-scroll">Home</a></li>
                            <li><a href="index.php?page=shop" class="page-scroll" data-rel="books">Shop</a></li>
                            <li><a href="index.php?page=overjenny" class="page-scroll">Over Jenny</a></li>
                            <li><a href="index.php?page=portfolio" class="page-scroll">Portfolio</a></li>
                            <li><a href="index.php?page=contact" class="page-scroll">Contact</a></li>
                            <li><a href="index.php?page=winkelwagen"><i class="fa fa-2x fa-shopping-cart"><span id="cartCounter"></span></i></a></li>
                            <!-- <li><form class="search"><div>
                            <input class="searchTerm" placeholder="Zoek hier iets ..." />
                            <input class="searchButton" type="submit" /></div>
                            </form></li> -->
                            
                        </ul>
                    </div>
                </div>
            </div>
        </nav>