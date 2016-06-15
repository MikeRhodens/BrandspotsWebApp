<div class="cta-button">
    <h3>Zoeken</h3>
</div>

<div class="sort-by">
    <div class="text"><h4>Sort by:</h4></div>
    <div class="sort-button">
        <a class="" href="?action=search&sort=
				<?php
				if(isset($_GET['sort']) && $_GET['sort'] == 'price1'){
					echo 'price2';
				}
				else {
					echo 'price1';
				}
				?>
				">Price</a>
    </div>
    <div class="sort-button">
        <a class="" href="?action=search&sort=
				<?php
				if(isset($_GET['sort']) && $_GET['sort'] == 'alpha1'){
					echo 'alpha2';
				}
				else {
					echo 'alpha1';
				}
				?>
				">Alphabet</a>
    </div>
    <div class="clear"></div>
</div><!--End Sort by-->

<?php
foreach ($result as $row) {
    $imgNumber = $row['product_image'];
    $price = $row['product_price'];
    $name = $row['product_name'];
    $id = $row['id'];
    ?>
    <div class='product darkgray'>
        <a href='?action=product&id= <?php echo $id; ?>'>
            <div class='image'>
                <img src='assets/links/<?php echo $imgNumber; ?>.JPG' alt='backpack'>
            </div>
            <div class='info-product'>
                <div class='title-product'>
                    <h1><?php echo $name; ?></h1>
                </div>
                <div class='price-product'>
                    <h4><span class='bold'>Prijs:</span> &euro; <?php echo $price; ?></h4>
                </div>
            </div><!--End info-product-->
            <div class='clear'></div>
        </a>
    </div><!--End product-->
<?php } ?>
