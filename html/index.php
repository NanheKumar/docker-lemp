<?php
echo "<h2> Check MySql Connection </h2>";


$mysqli = new mysqli(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_NAME'));

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
	echo "Connection Done";
}
$r = new Redis();
$r->pconnect('redis', '6379');

if ( $r == true) { 
	echo "OK"; 
	$r->set('name',"nanhe");
}

phpinfo();
?>
