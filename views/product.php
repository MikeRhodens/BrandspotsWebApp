<div class="cta-button">
    <h3>Product</h3>
</div>

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
        <!-- <div class="review-stars">
            <ul class="stars3">
                <li><a href="#">&#9733;</a></li>
                <li><a href="#">&#9733;</a></li>
                <li><a href="#">&#9733;</a></li>
                <li><a href="#">&#9733;</a></li>
                <li><a href="#">&#9733;</a></li>
                <li><p>(2)</p></li>
            </ul>
        </div> -->
        <div class="cta-button">
            <a href="?action=cart" style="height:0px;">
                <button class="cart-button">Add to cart</button
            </a>
        </div>

        <div class="product-description">
            <?php echo $desc; ?>

        </div>

    </div><!--End info-product-->
</div>
