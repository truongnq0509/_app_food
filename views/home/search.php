<main class="main">
	<div class="page-header cph-header pl-4 pr-4" style="background-color: #fff7ec">
		<h1 class="page-title font-weight-light text-capitalize">Kết quả tìm kiếm: <?= count($products) ?> sản phẩm</span></h1>
		<div class="category-container row justify-content-center cols-2 cols-xs-3 cols-sm-4 cols-md-6 pt-6">
		</div>
	</div>

	<nav class="breadcrumb-nav has-border">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Trang Chủ</a></li>
				<li><a href="index.php">Tìm Kiếm</a></li>
			</ul>
		</div>
	</nav>
	<div class="page-content">
		<section class="container mt-10 pt-7 mb-7 appear-animate">
			<div class="tab tab-nav-center product-tab product-tab-type2">
				<div class="tab-content">
					<div class="tab-pane active" id="canned">
						<div class="row cols-lg-6 cols-md-4 cols-3">
							<!-- Lặp sản phẩm nhé -->
							<?php
							foreach ($products as $product) :
							?>
								<div class="product shadow-media text-center">
									<figure class="product-media">
										<a href="index.php?controller=product&action=detail&id=<?= $product['id'] ?>">
											<img src="./upload/<?php echo $product['image'] ?>" alt="product" width="295" height="369" />
										</a>
										<div class="product-label-group">
											<?php if ($product['sale']) : ?>
												<label class="product-label label-sale">- <?= ceil(100 - ($product['sale'] / $product['price']) * 100) ?> %</label>
											<?php endif; ?>
										</div>
										<div class="product-action-vertical">
											<a href="index.php?controller=cart&action=store&id=<?= $product['id'] ?>" class="btn-product-icon" title="Add to Cart">
												<i class="p-icon-cart-solid"></i>
											</a>
											<a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist">
												<i class="p-icon-heart-solid"></i>
											</a>
										</div>
									</figure>
									<div class="product-details">
										<div class="ratings-container">
											<div class="ratings-full">
												<span class="ratings" style="width:60%"></span>
												<span class="tooltiptext tooltip-top"></span>
											</div>
											<a href="product-simple.html#content-reviews" class="rating-reviews"></a>
										</div>
										<h5 class="product-name">
											<a href="index.php?controller=detail&id=<?= $product['id'] ?>">
												<?= $product['name'] ?>
											</a>
										</h5>
										<span class="product-price">
											<?php if ($product['sale']) : ?>
												<del class="old-price"><?= number_format($product['price'], 0, ',', '.') ?></del>
												<ins class="new-price"><?= number_format($product['sale'], 0, ',', '.') ?></ins>
											<?php else : ?>
												<del class="new-price"><?= number_format($product['price'], 0, ',', '.') ?></del>
											<?php endif; ?>
										</span>
									</div>
								</div>
							<?php
							endforeach;
							?>
							<!-- End .product -->
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</main>