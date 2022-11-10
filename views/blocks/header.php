<header class="header">
	<div class="header-middle has-center sticky-header fix-top sticky-content">
		<div class="container">
			<div class="header-left">
				<a href="#" class="mobile-menu-toggle" title="Mobile Menu">
					<i class="p-icon-bars-solid"></i>
				</a>
				<a href="index.php" class="logo">
					<img src="./public/front-end/images/logo.png" alt="logo" width="171" height="41">
				</a>
				<!-- End of Divider -->
			</div>
			<div class="header-center">
				<nav class="main-nav">
					<ul class="menu">
						<li>
							<a href="index.php">Trang Chủ</a>
						</li>
						<li>
							<a href="index.php?controller=shop">Cửa Hàng</a>
						</li>
						<li>
							<a href="index.php?controller=blog">Blog</a>
						</li>
					</ul>
				</nav>
			</div>

			<div class="header-right">
				<div class="header-search hs-toggle">
					<a class="search-toggle" href="#" title="Search">
						<i class="p-icon-search-solid"></i>
					</a>
					<form action="#" class="form-simple">
						<input type="search" autocomplete="off" placeholder="Search in..." required>
						<button class="btn btn-search" type="submit">
							<i class="p-icon-search-solid"></i>
						</button>
					</form>
				</div>
				<a href="login.html" >
					<a style="font-size: 20px; width: 30px; height: 30px;" href="login.html">
						<span class="sr-only">login</span>
						<i class="p-icon-user-solid"></i>
					</a>
				</a>

				<div class="dropdown cart-dropdown off-canvas mr-0 mr-lg-2">
					<a href="#" class="cart-toggle link">
						<i class="p-icon-cart-solid">
							<span class="cart-count">2</span>
						</i>
					</a>
					<div class="canvas-overlay"></div>
					<div class="dropdown-box">
						<div class="canvas-header">
							<h4 class="canvas-title">Shopping Cart</h4>
							<a href="#" class="btn btn-dark btn-link btn-close">close<i class="p-icon-arrow-long-right"></i><span class="sr-only">Cart</span></a>
						</div>
						<div class="products scrollable">
							<div class="product product-mini">
								<figure class="product-media">
									<a href="product-simple.html">
										<img src="./public/front-end/images/cart/product-1.jpg" alt="product" width="84" height="105" />
									</a>
									<a href="#" title="Remove Product" class="btn-remove">
										<i class="p-icon-times"></i><span class="sr-only">Close</span>
									</a>
								</figure>
								<div class="product-detail">
									<a href="product.html" class="product-name">Peanuts</a>
									<div class="price-box">
										<span class="product-quantity">7</span>
										<span class="product-price">$12.00</span>
									</div>
								</div>

							</div>
							<!-- End of Cart Product -->
							<div class="product product-mini">
								<figure class="product-media">
									<a href="product-simple.html">
										<img src="./public/front-end/images/cart/product-2.jpg" alt="product" width="84" height="105" />
									</a>
									<a href="#" title="Remove Product" class="btn-remove">
										<i class="p-icon-times"></i><span class="sr-only">Close</span>
									</a>
								</figure>
								<div class="product-detail">
									<a href="product.html" class="product-name">Prime Beef</a>
									<div class="price-box">
										<span class="product-quantity">4</span>
										<span class="product-price">$16.00</span>
									</div>
								</div>
							</div>
							<!-- End of Cart Product -->
						</div>
						<!-- End of Products  -->
						<div class="cart-total">
							<label>Subtotal:</label>
							<span class="price">$148.00</span>
						</div>
						<!-- End of Cart Total -->
						<div class="cart-action">
							<a href="cart.html" class="btn btn-outline btn-dim mb-2">View
								Cart</a>
							<a href="checkout.html" class="btn btn-dim"><span>Go To Checkout</span></a>
						</div>
						<!-- End of Cart Action -->
					</div>
					<!-- End Dropdown Box -->
				</div>
			</div>
		</div>
	</div>
</header>