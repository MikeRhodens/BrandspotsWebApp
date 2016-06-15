<?php

$searchQuery = isset($_POST['searchQuery']) ? $_POST['searchQuery'] : "";
$searchQuery = "%" . $searchQuery . "%";
$searchQuery = mysqli_real_escape_string($mysqli, $searchQuery);
$fixedQuery = 'no query fixes';
if($searchQuery != '%%' || $searchQuery != ''){
  $_SESSION['q'] = $searchQuery;
  $fixedQuery = $_SESSION['q'];
}

echo $_SESSION['q'] . '<br>';
//echo $fixedquery;

$query = "SELECT * FROM products WHERE product_name LIKE '$fixedQuery'";
$searchQueryPart = "* FROM products WHERE product_name LIKE '$fixedQuery'";
$result = $mysqli->query($query);
//var_dump($result);

?>
