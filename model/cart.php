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

$result_cart = [];
$sql_cart_query = "SELECT * FROM products WHERE";
$counter = 1;
foreach ($_SESSION['cart_id'] as $id) {
    if ($counter > 1) {
        $sql_cart .= " OR ";
    }
     $sql_cart .= " id = $id";
     $counter .= 1;
}

$sql_cart_query = mysqli_real_escape_string($mysqli, $sql_cart_query);
$result_cart = $mysqli->query($query);




 ?>
