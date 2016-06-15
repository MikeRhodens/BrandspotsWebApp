<?php
if (!isset($_SESSION['cart_id'])) {
    $_SESSION['cart_id'] = array();
}

$cart_product_id = isset($_GET['id']) ? $_GET['id'] : "";
if ($cart_product_id != "") {
    if(!in_array($cart_product_id,$_SESSION['cart_id'])){
        $_SESSION['cart_id'][] = $cart_product_id;
    }
}else {
    echo "lmao";
}

var_dump($_SESSION['cart_id']);
echo $cart_product_id;


 ?>
