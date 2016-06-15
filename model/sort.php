<?php

$sortType = isset($_GET['sort']) ? $_GET['sort'] : '';

$sortQuery = 'id';
$sortAscDesc = 'DESC';
switch($sortType){
  case 'price1':
    $sortQuery = 'product_price';
    $sortAscDesc = 'ASC';
    break;
  case 'alpha1';
    $sortQuery = 'product_name';
    $sortAscDesc = 'ASC';
    break;
  case 'price2':
    $sortQuery = 'product_price';
    $sortAscDesc = 'DESC';
    break;
  case 'alpha2';
    $sortQuery = 'product_name';
    $sortAscDesc = 'DESC';
    break;
}

$currentpage = isset($_GET['action']) ? $_GET['action'] : '' ;
if($currentpage == 'overzicht' && isset($resultall)){
  $mainQueryPart = "* FROM products";
  $resultall = GetSortedData($resultall,$sortQuery,$sortAscDesc,$mainQueryPart);
}
elseif ($currentpage == 'search' && isset($result)) {
  $mainQueryPart = $searchQueryPart;
  $result = GetSortedData($result,$sortQuery,$sortAscDesc,$mainQueryPart);
}
?>
