<div class="cta-button">
    <h3>Afrekenen</a>
</div>

<div class="main-cart">
    <div class="product-main">
        <div class="image-main">
            <img src="assets/links/<?php echo $img; ?>.JPG" alt="backpack">
        </div>
        <div class="info-product">
            <div class="title-product">
                <h1><?php echo $name; ?></h1>
            </div>
            <div class="price-product">
                <h4><span class="bold">Prijs:</span> &euro; <?php echo $price; ?> </h4>
            </div>
            <div class="cta-button">
                <a href="?action=cart&id=<?php echo $id; ?>" style="height:0px;">
                    <button class="cart-button">Add to cart</button
                </a>
            </div>

            <div class="product-description">
                <?php echo $desc; ?>

            </div>

        </div><!--End info-product-->
    </div>
</div>

<div class="info">
    <div class="totalprice-cart">
        <div class="subtotal cf">
            <ul>
                <li class="totalRow"><span class="label">Subtotal</span><span class="value">&euro;88.44</span></li>
                <li class="totalRow"><span class="label">Tax</span><span class="value">&euro;23.50</span></li>
                <li class="totalRow"><span class="label">Shipping</span><span class="value">&euro;4.95</span></li>
                <li class="totalRow final"><span class="label">Total</span><span class="value">&euro;116.98</span></li>
            </ul>
        </div>
    </div><!--totalprice-cart end-->
    <div class="checkout">
        <a href="?action=payment">Checkout!</a>
    </div><!-- end checkout button -->
</div>
</div>
