<main class="main">
	<div class="page-content">
		<section class="intro-section">
			<div class="intro-slider owl-carousel owl-theme owl-nav-arrow row animation-slider cols-1 gutter-no mb-8" data-owl-options="{
                                'nav': true,
                                'dots': false,
                                'loop': false,
                                'items': 1,
                                'responsive': {
                                    '0': {
                                        'nav': false,
                                        'autoplay': true
                                    },
                                    '768': {
                                        'nav': true
                                    }
                                }
                            }">
				<div class="banner banner-fixed banner1">
					<figure>
						<img src="https://magiamgia.com/wp-content/uploads/2021/12/Shopee-27.12.jpg" alt="banner" width="1903" height="600" style="background-color: #f8f6f6;">
					</figure>
					<div class="banner-content y-50 pb-1">
						<h4 class="banner-subtitle title-underline2 font-weight-normal text-dim slide-animate appear-animate" data-animation-options="{
                                                'name': 'fadeInUpShorter',
                                                'delay': '.2s'
                                            }">
							<span>FROM ONLINE
								STORE</span>
						</h4>
						<h3 class="banner-title text-dark lh-1 mb-7 slide-animate appear-animate" data-animation-options="{
                                                'name': 'fadeInUpShorter',
                                                'delay': '.4s'
                                            }">
							Panda Birthday<br>Collection</h3>
						<a href="shop.html" class="btn btn-dark slide-animate appear-animate" data-animation-options="{
                                                'name': 'fadeInUpShorter',
                                                'delay': '.6s'
                                            }">SHop
							now<i class="p-icon-arrow-long-right"></i></a>
					</div>
				</div>
				<div class="banner banner-fixed banner2">
					<figure>
						<img src="https://magiamgiashopee.vn/wp-content/uploads/2022/02/Shopee-25.2-Sale-cuoi-thang-don-luong-ve.jpg" alt="banner" width="1903" height="600" style="background-color: #F3F2EE;">
					</figure>
					<div class="banner-content y-50 pb-1">
						<img src="images/demos/demo1/intro/brand1.png" width="269" height="75" alt="brand" class="mb-5 slide-animate appear-animate" data-animation-options="{
                                                    'name': 'fadeIn',
                                                    'delay': '.2s'
                                                }" />
						<h3 class="banner-title text-dark mb-5 mb-sm-9 slide-animate appear-animate" data-animation-options="{
                                                'name': 'fadeInLeftShorter',
                                                'delay': '.4s'
                                            }">
							New Best Products<br>
							With Cocoa Cake and Oil</h3>
						<a href="shop.html" class="btn btn-dark mr-2 mr-xs-6 slide-animate appear-animate" data-animation-options="{
                                                'name': 'fadeInLeftShorter',
                                                'delay': '.6s'
                                            }">SHop
							now<i class="p-icon-arrow-long-right"></i></a>
						<h5 class="banner-price title-underline2 slide-animate appear-animate" data-animation-options="{
                                                'name': 'fadeInLeftShorter',
                                                'delay': '.6s'
                                            }">Only <span class="price">29<span class="d-xs-show">.00</span></span>
						</h5>
					</div>
				</div>
			</div>

		</section>
		<section class="container mt-10 pt-7 mb-7 appear-animate">
			<h2 class="title-underline2 text-center mb-2"><span>Sản Phẩm Mới</span></h2>
			<div class="tab tab-nav-center product-tab product-tab-type2">
				<ul class="nav nav-tabs">
					<?php foreach ($categorys as $category) : ?>
						<li class="nav-item">
							<a class="nav-link active" href="#canned">
								<figure>
									<img src="https://product.hstatic.net/200000299178/product/12_c182e986a3f14d9e87e25f78b7fc176c_grande.jpg" width="160" height="130" alt="Nav img" />
								</figure>
								<div class="nav-title"><?= $category['name'] ?></div>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="canned">
						<div class="row cols-lg-4 cols-md-3 cols-2">
							<!-- Lặp sản phẩm nhé -->
							<?php
							foreach ($products as $product) :
							?>
								<div class="product shadow-media text-center">
									<figure class="product-media">
										<a href="product-simple.html">
											<img src="https://product.hstatic.net/200000299178/product/12_c182e986a3f14d9e87e25f78b7fc176c_grande.jpg" alt="product" width="295" height="369" />
										</a>
										<div class="product-label-group">
											<?php if ($product['sale']) : ?>
												<label class="product-label label-sale">- <?= ceil(100 - ($product['sale'] / $product['price']) * 100) ?> %</label>
											<?php endif; ?>
										</div>
										<div class="product-action-vertical">
											<a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to Cart">
												<i class="p-icon-cart-solid"></i>
											</a>
											<a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist">
												<i class="p-icon-heart-solid"></i>
											</a>
											<a href="#" class="btn-product-icon btn-compare" title="Compare">
												<i class="p-icon-compare-solid"></i>
											</a>
											<a href="#" class="btn-product-icon btn-quickview" title="Quick View">
												<i class="p-icon-search-solid"></i>
											</a>
										</div>
									</figure>
									<div class="product-details">
										<div class="ratings-container">
											<div class="ratings-full">
												<span class="ratings" style="width:60%"></span>
												<span class="tooltiptext tooltip-top"></span>
											</div>
											<a href="product-simple.html#content-reviews" class="rating-reviews">(12)</a>
										</div>
										<h5 class="product-name">
											<a href="product-simple.html">
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