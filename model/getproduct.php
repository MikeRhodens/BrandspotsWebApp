<?php
$id = isset($_GET['id']) ? mysqli_real_escape_string($mysqli, $_GET['id']) : "";
$id = intval($id);
$query = "SELECT * FROM products WHERE id = $id";
$query = mysqli_real_escape_string($mysqli, $query);
$resultall = $mysqli->query($query);
//echo $query;
//var_dump($resultall);

foreach($resultall as $row){
  $name = $row['product_name'];
  $price = $row['product_price'];
  $desc = $row['product_desc'];
  $img = $row['product_image'];
}


?>
