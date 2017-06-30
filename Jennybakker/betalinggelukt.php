<?php

echo "hallo";

if ($_SESSION["status"] = "Paid") {
	echo "Paid";
} elseif ($_SESSION["status"] = "Open"){
	echo "Open";
} elseif ($_SESSION["status"] = "Cancel"){
	echo "Cancel";
}



?>