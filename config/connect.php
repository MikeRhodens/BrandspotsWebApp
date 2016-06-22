<?php
$mysqli = new mysqli('localhost','root','','webapp');


if ($mysqli->connect_errno) {
	echo "doet niet: ( ".$mysqli->connect_errno.')'.$mysqli->connect_errno;
}
?>
