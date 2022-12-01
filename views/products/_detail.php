<main class="main single-product">
	<nav class="breadcrumb-nav">
		<div class="container">
			<div class="product-navigation">
				<ul class="breadcrumb">
					<li><a href="index.php">Trang Chủ</a></li>
					<li><a href="index.php?controller=product&action=detail&id=<?= $product['id'] ?>"><?= $product['name'] ?></a></li>
					<li>Chi Tiết</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="page-content">
		<div class="container">
			<div class="product product-single product-simple row mb-8">
				<div class="col-md-7">
					<div class="product-gallery">
						<div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
							<figure class="product-image">
								<img src="./upload/<?php echo $product['image'] ?>" width="800" height="1000">
							</figure>
							<figure class="product-image">
								<img src="./upload/<?php echo $product['image'] ?>" width="800" height="1000">
							</figure>
							<img src="./upload/<?php echo $product['image'] ?>" width="800" height="1000">
							</figure>
							<img src="./upload/<?php echo $product['image'] ?>" width="800" height="1000">
						</div>
						<div class="product-thumbs-wrap">
							<div class="product-thumbs">
								<div class="product-thumb active">
									<img src="./upload/<?php echo $product['image'] ?>" width="800" height="1000">
								</div>
								<div class="product-thumb">
									<img src="./upload/<?php echo $product['image'] ?>" width="800" height="1000">
								</div>
								<div class="product-thumb">
									<img src="./upload/<?php echo $product['image'] ?>" width="800" height="1000">
								</div>
								<div class="product-thumb">
									<img src="./upload/<?php echo $product['image'] ?>" width="800" height="1000">
								</div>
							</div>
							<button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
							<button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="product-details">
						<h1 class="product-name"><?= $product['name'] ?></h1>
						<div class="ratings-container">
						</div>
						<p class="product-price mb-1">
							<?php if ($product['sale']) : ?>
								<del class="old-price"><?= number_format($product['price'], 0, ',', '.') ?></del>
								<ins class="new-price"><?= number_format($product['sale'], 0, ',', '.') ?> VNĐ</ins>
							<?php else : ?>
								<del class="new-price"><?= number_format($product['price'], 0, ',', '.') ?> VNĐ</del>
							<?php endif; ?>
						</p>
						<p class="product-short-desc">
							<?= $product['description'] ?>
						</p>
						<div class="product-form product-qty pt-1">
							<div class="product-form-group">
								<a href="index.php?controller=cart&action=store&id=<?= $product['id'] ?>" class="btn-product ls-normal font-weight-semi-bold" style="width: 100%; background-color: #ccc; text-align: center;display: block; padding: 20px 0;">Thêm Vào Giỏ Hàng</a>
							</div>
						</div>
						<hr class="product-divider">

						<div class="product-meta">
							<label>Danh Mục:</label><a href="#">Cháo</a><br>
							<label>ID:</label><a href="#"><?= $product['id'] ?></a><br>
							<label class="social-label">share:</label>
							<div class="social-links">
								<a href="#" class="social-link fab fa-facebook-f"></a>
								<a href="#" class="social-link fab fa-twitter"></a>
								<a href="#" class="social-link fab fa-pinterest"></a>
								<a href="#" class="social-link fab fa-linkedin-in"></a>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="product-content">
				<div class="content-reviews pt-9" id='content-reviews'>
					<div class="with-toolbox">
						<h2 class="title title-line title-underline mb-8">
							<span>
								Bình Luận
							</span>
						</h2>

					</div>
					<div class="row pb-10">
						<div class="col-lg-8 comments border-no">
							<ul class="comments-list">
								<li>
									<div class="comment">
										<figure class="comment-media">
											<a href="#">
												<img src="./upload/<?php echo $product['image'] ?>" width="100" height="100" alt="avatar">
											</a>
										</figure>
										<div class="comment-body mt-2 mt-sm-0">
											<div class="comment-rating ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
											</div>
											<div class="comment-user">
												<span class="comment-date">by
													<span class="font-weight-semi-bold text-uppercase text-dim">Nguyễn Quang Trường</span>
													on 11/10/2022
												</span>
											</div>
											<div class="comment-description">
												Very Good!
											</div>
											<div class="comment-content">
												<p>
													Lorem ipsum dolor sit amt, consectetur adipiscing elit,
													sed
													do eiusmod tempor incididunt ut labore
													et dolore magna aliqua. Venenatis tellus in metus
													enenatis
													tellus in metus vulputate eu scelerisque
													felis.vulputate eu scelerisque felis.
												</p>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="comment">
										<figure class="comment-media">
											<a href="#">
												<img src="./upload/<?php echo $product['image'] ?>" width="800" height="1000">
											</a>
										</figure>
										<div class="comment-body mt-2 mt-sm-0">
											<div class="comment-rating ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
											</div>
											<div class="comment-user">
												<span class="comment-date">by
													<span class="font-weight-semi-bold text-uppercase text-dim">Nguyễn Quang Trường</span>
													on 11/10/2022
												</span>
											</div>
											<div class="comment-description">
												Very Good!
											</div>
											<div class="comment-content">
												<p>
													Lorem ipsum dolor sit amt, consectetur adipiscing elit,
													sed
													do eiusmod tempor incididunt ut labore
													et dolore magna aliqua. Venenatis tellus in metus
													enenatis
													tellus in metus vulputate eu scelerisque
													felis.vulputate eu scelerisque felis.
												</p>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- End Comments -->
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<section class="mt-3">
			<h2 class="text-center mb-7">Sản Phẩm Liên Quan</h2>
			<div class="owl-carousel owl-theme owl-nav-outer slider-brand row cols-lg-4 cols-md-3 cols-2">
				<?php foreach ($productByCategory as $item) : ?>
					<div class="product-wrap">
						<div class="product text-center">
							<figure class="product-media">
								<a href="index.php?controller=product&action=detail&id=<?= $item['id'] ?>">

									<img src="./upload/<?php echo $item['image'] ?>" width="800" height="1000">

								</a>
								<div class="product-label-group">
									<?php if ($item['sale']) : ?>
										<label class="product-label label-sale">- <?= ceil(100 - ($item['sale'] / $item['price']) * 100) ?> %</label>
									<?php endif; ?>
								</div>
								<div class="product-action-vertical">
									<a href="index.php?controller=cart&action=store&id=<?= $item['id'] ?>" class="btn-product-icon" title="Add to Cart">
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
								</div>
								<h5 class="product-name">
									<a href="index.php?controller=product&action=detail&id=<?= $item['id'] ?>">
										<?= $item['name'] ?>
									</a>
								</h5>
								<div class="product-price">
									<?php if ($item['sale']) : ?>
										<del class="old-price"><?= number_format($item['price'], 0, ',', '.') ?></del>
										<ins class="new-price"><?= number_format($item['sale'], 0, ',', '.') ?></ins>
									<?php else : ?>
										<del class="new-price"><?= number_format($item['price'], 0, ',', '.') ?></del>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<!-- End .product -->
					</div>
				<?php endforeach; ?>
			</div>
			<!-- End .row -->
		</section>
	</div>
</main>