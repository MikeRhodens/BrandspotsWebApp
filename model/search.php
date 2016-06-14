<?php

$searchQuery = isset($_POST['searchQuery']) ? $_POST['searchQuery'] : "" ;
$result = $mysqli->query($searchQuery);
var_dump($result);
$imgNumber = 5;
$price = 69.99;
$name = "jacket";


echo "
<div class='product darkgray'>
  <div class='info-button'><a href='product.html'><i class='fa fa-arrow-circle-right' aria-hidden='true'></i></a></div>
    <div class='image'>
      <img src='assets/links/" . $imgNumber . ".JPG' alt='backpack'>
    </div>
    <div class='info-product'>
      <div class='title-product'>
        <h1>" . $name . "</h1>
      </div>
      <div class='price-product'>
        <h4><span class='bold'>Prijs:</span> &euro; " . $price . " </h4>
      </div>
    </div><!--End info-product-->
  <div class='clear'></div>
</div><!--End product-->
";




?>
