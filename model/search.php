<?php


if(isset($_POST['searchQuery'])){
  $_SESSION['q'] = $_POST['searchQuery'];
  $searchQuery = $_SESSION['q'];
}
else{
  $searchQuery = $_SESSION['q'];
}
// $searchQuery = isset($_POST['searchQuery']) ? $_POST['searchQuery'] : "";
// $searchQuery = mysqli_real_escape_string($mysqli, $searchQuery);
// $fixedQuery = 'no query fixes';
// if(!empty($searchQuery)){
//   $_SESSION['q'] = $searchQuery;
//   $fixedQuery = $_SESSION['q'];
// }

$searchQuery = "%" . $searchQuery . "%";
// echo $searchQuery . '<br>';

//echo $fixedquery;

$query = "SELECT * FROM products WHERE product_name LIKE '$searchQuery'";
$searchQueryPart = "* FROM products WHERE product_name LIKE '$searchQuery'";
$query = mysqli_real_escape_string($mysqli, $query);
$searchQueryPart = mysqli_real_escape_string($mysqli, $searchQueryPart);
$result = $mysqli->query($query);
//var_dump($result);

?>
