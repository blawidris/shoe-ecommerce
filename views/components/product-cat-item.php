	<!-- single product -->
	<div class="col-lg-4 col-md-6">
		<div class="single-product">
			<img class="img-fluid" src="<?= ASSETS_PATH . $item->image ?>" alt="">
			<div class="product-details">
				<h6><?= $item->name; ?></h6>
				<div class="price">
					<h6><?= $item->price ?></h6>
					<h6 class="l-through"><?= "$21$key" ?></h6>
				</div>
				<div class="prd-bottom">

					<a href="" class="social-info">
						<span class="ti-bag"></span>
						<p class="hover-text" id="addToCart"
						 	data-name="<?= $item->name; ?>" 
							data-quantity="1" data-image="<?= $item->image; ?>"
							data-price="<?= $item->price; ?>" 
							data-id="<?= $key; ?>">
							add to bag
						</p>
					</a>
					<a href="" class="social-info">
						<span class="lnr lnr-heart"></span>
						<p class="hover-text">Wishlist</p>
					</a>
					<a href="" class="social-info">
						<span class="lnr lnr-sync"></span>
						<p class="hover-text">compare</p>
					</a>
					<a href="single-product.php?id=<?= $key; ?>" class="social-info">
						<span class="lnr lnr-move"></span>
						<p class="hover-text">view more</p>
					</a>
				</div>
			</div>
		</div>
	</div>