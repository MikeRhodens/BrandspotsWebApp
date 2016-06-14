<?php

$searchQuery = isset($_POST['searchQuery']) ? $_POST['searchQuery'] : "" ;
$searchQuery = "%" . $searchQuery . "%" ;
$query = "SELECT * FROM products WHERE product_name LIKE '$searchQuery'";
$result = $mysqli->query($query);
// var_dump($result);

?>
