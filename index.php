<?php

include 'views/header.php';

$action = isset($_GET['action']) ? $_GET['action'] : "";
switch ($action) {
  case 'cart':
    include 'views/cart.php';
    break;

  case 'payment':
    include 'views/payment.php';
    break;

  case 'overzicht':
    include 'views/overzicht.php';
    break;

  default:
    include 'views/overzicht.php';
    break;
}

include 'views/footer.php';


 ?>
