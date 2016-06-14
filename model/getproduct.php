<?php
$id = isset($_GET['id']) ? mysqli_real_escape_string($mysqli,$_GET['id']) : "";
$query = "SELECT * FROM products WHERE id = $id";
$query = mysqli_real_escape_string($mysqli,$query);
$resultall = $mysqli->query($query);
?>
