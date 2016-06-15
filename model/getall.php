<?php
$query = "SELECT * FROM products";
$query = mysqli_real_escape_string($mysqli, $query);
$resultall = $mysqli->query($query);

// $sortType = isset($_GET['sort']) ? $_GET['sort'] : '';
//
// $sortQuery = 'id';
// $sortAscDesc = 'DESC';
// switch($sortType){
//   case 'price1':
//     $sortQuery = 'product_price';
//     $sortAscDesc = 'ASC';
//     break;
//   case 'alpha1';
//     $sortQuery = 'product_name';
//     $sortAscDesc = 'ASC';
//     break;
//   case 'price2':
//     $sortQuery = 'product_price';
//     $sortAscDesc = 'DESC';
//     break;
//   case 'alpha2';
//     $sortQuery = 'product_name';
//     $sortAscDesc = 'DESC';
//     break;
// }
// $resultall = GetSortedData($resultall,$sortQuery,$sortAscDesc)

?>
