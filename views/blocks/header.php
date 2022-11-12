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
							<a href="index.php?controller=product">Cửa Hàng</a>
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


				<div class="dropdown cart-dropdown  mr-0 mr-lg-2">
					<a href="index.php?controller=cart" class="cart-toggle link">
						<i class="p-icon-cart-solid">
							<?php
							if (isset($_SESSION['cart'])) :
							?>
								<span class="cart-count">
									<?php
									echo count($_SESSION['cart']);
									?>
								</span>
							<?php endif; ?>
						</i>
					</a>
				</div>

				<?php
				if (!empty($_SESSION['user'])) : ?>
					<a style="font-size: 16px; margin: 0 4px;" href="index.php?controller=account&action=logout" onclick="return confirm('Bạn có chắc muốn đăng xuất khỏi trái đất không')">
						<?php echo $_SESSION['user']['email']; ?>
					</a>
				<?php else : ?>
					<a style="font-size: 24px; margin: 0 4px;" href="index.php?controller=account">
						<i class="fa fa-user"></i>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>