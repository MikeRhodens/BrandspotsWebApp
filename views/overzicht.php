<div class="cta-button">
	<h3>Overzicht</h3>
</div>
		<div class="sort-by">
				<div class="text"><h4>Sort by:</h4></div>
				<div class="sort-button">
					<a class="" href="#">Price</a>
				</div>
				<div class="sort-button">
					<a class="" href="#">Alphabet</a>
				</div>
			<div class="clear"></div>
		</div><!--End Sort by-->

		<!-- <div class="product darkgray">

				<div class="image">
					<img src="assets/links/1.JPG" alt="backpack">
				</div>
				<div class="info-product">
					<div class="title-product">
						<h1>Backpack Black</h1>
					</div>
					<div class="price-product">
						<h4><span class="bold">Prijs:</span> &euro; 69,99 </h4>
					</div>
					<div class="info-button"><a href="product.html"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
				</div>
			<div class="clear"></div>
		</div> -->

		<?php
		foreach($resultall as $row){
		  $imgNumber = $row['product_image'];
		  $price = $row['product_price'];
		  $name = $row['product_name'];
		  ?>
		    <div class='product darkgray'>
		      <div class='info-button'><a href='product.html'><i class='fa fa-arrow-circle-right' aria-hidden='true'></i></a></div>
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
		    </div><!--End product-->
		<?php } ?>
