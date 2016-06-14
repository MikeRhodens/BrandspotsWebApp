<?php
include 'config/connect.php';
include 'views/header.php';
$action = isset($_GET['action']) ? mysqli_real_escape_string($mysqli,$_GET['action']) : "";
switch ($action) {
  case 'cart':
    include 'views/cart.php';
    break;

  case 'payment':
    include 'views/payment.php';
    break;

  case 'overzicht':
    include 'model/getall.php';
    include 'views/overzicht.php';
    break;

  case 'search';
    include 'model/search.php';
    include 'views/searchresults.php';
    break;


  case 'product';
    include 'model/getproduct.php';
    include 'views/product.php';
    break;

  default:
    include 'model/getall.php';
    include 'views/overzicht.php';
    break;
}

include 'views/footer.php';

?>
