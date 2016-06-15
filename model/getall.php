<?php
// $query = "SELECT * FROM products";
$query = mysqli_real_escape_string($mysqli, $query);
$resultall = $mysqli->query($query);
?>
