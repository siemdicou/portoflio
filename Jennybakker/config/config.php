<?php

// db properties
// define('DBHOST','localhost');
// define('DBUSER','root');
// define('DBPASS','');
// define('DBNAME','jennybakker');




// //  Databasegegevens online
define('DBHOST','rdbms.strato.de');
define('DBUSER','U2793304');
define('DBPASS','Jennybakker2016');
define('DBNAME','DB2793304');


$mysqli = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if ($mysqli->connect_errno) {
echo "Failed to connect to MySQL:
(" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>