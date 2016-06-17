<?php
if (!isset($_SESSION['cart_id'])) {
    $_SESSION['cart_id'] = array();
}

$cart_product_id = isset($_GET['id']) ? $_GET['id'] : "";
$remove_cart_id = isset($_GET['remove_id']) ? $_GET['remove_id'] : "";

if ($cart_product_id != "") {
    if(!in_array($cart_product_id,$_SESSION['cart_id'])){
        $_SESSION['cart_id'][] = $cart_product_id;
    }
}

$_SESSION['cart_id'] = array_diff($_SESSION['cart_id'], array($remove_cart_id));
$result_cart = [];

if ($_SESSION['cart_id'] != null) {
  $sql_cart_query = "SELECT * FROM products WHERE";
  $counter = 1;
  foreach ($_SESSION['cart_id'] as $id) {
      if ($counter > 1) {
          $sql_cart_query .= " OR ";
      }
       $sql_cart_query .= " id = $id";
       $counter .= 1;
  }
  $sql_cart_query = mysqli_real_escape_string($mysqli, $sql_cart_query);
  $result_cart = $mysqli->query($sql_cart_query);
}



 ?>
