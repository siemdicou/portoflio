<?php 
session_start();
// require 'config/config.php';


include 'views/header.php';

$page = (empty($_GET['page'])) ? '' : $_GET['page'];

switch ($page) {
	case "home":
		include "views/index.php";
		break;

	case "shop":
		include "views/shop.php";
		break;

	case "overjenny":
		include "views/overjenny.php";
		break;

	case "portfolio":
		include "views/portfolio.php";
		break;

	case "winkelwagen":
		include "views/winkelwagen.php";
		break;

	case "contact":
		include "views/contact.php";
		break;

		case "singleproduct":
		include "views/productpage.php";
		break;

	case "admin":
		include "admin/index.php";
		break;



		default:
		include "views/index.php";
		break;
	}

	include 'views/footer.php';

?>