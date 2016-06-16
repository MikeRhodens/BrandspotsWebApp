<div class="cta-button">
    <h3>Afrekenen</a>
</div>
<?php

  $final_price_arra = [];


  foreach($result_cart as $row){
    $name = $row['product_name'];
    $price = $row['product_price'];
    $desc = $row['product_desc'];
    $img = $row['product_image'];
    $id = $row['id'];
    $final_price_arra[] = $price;
 ?>
<div class="main-cart">
    <div class="product lightgray">
          <div class="image">
              <img src="assets/links/<?php echo $img; ?>.JPG" alt="product">
              <a href="?action=cart&remove_id=<?php echo $id; ?>">remove</a>
          </div>
          <div class="info-product">
              <div class="title-product">
                  <h1><?php echo $name; ?></h1>
              </div>
              <div class="price-product">
                  <h4><span class="bold">Prijs:</span>&euro; <?php echo $price; ?></h4>
              </div>
          </div><!--End info-product-->
        <div class="clear"></div>
    </div><!--End product-->
</div>

<?php }
  $money = array_sum($final_price_arra);
  $shipping = 4.95;
  $total = $money + $shipping;
?>

<div class="info">
    <div class="totalprice-cart">
        <div class="subtotal cf">
            <ul>
                <li class="totalRow"><span class="label">Total (tax incl.)</span><span class="value">&euro;<?php echo $money; ?></span></li>
                <li class="totalRow"><span class="label">Shipping</span><span class="value">&euro;<?php if ($money != "0") { echo '4.95'; }else{ echo "0";}  ?></span></li>
                <li class="totalRow final"><span class="label">Total</span><span class="value">&euro;<?php if ($money != "0") { echo $total; }else{ echo "0";}  ?></span></li>
            </ul>
        </div>
    </div><!--totalprice-cart end-->
    <div class="checkout">
        <a href="?action=payment">Checkout!</a>
    </div><!-- end checkout button -->
</div>
</div>
