<main class="main order">
	<div class="page-content pt-8 pb-10 mb-10">
		<div class="step-by pr-4 pl-4">
			<h3 class="title title-step"><a href="index.php?controller=cart">1.Giỏ Hàng</a></h3>
			<h3 class="title title-step"><a href="index.php?controller=order">2.Đặt Hàng</a></h3>
			<h3 class="title title-step active"><a href="index.php?controller=order&action=checkout">3.Hoàn Thành Đơn Hàng</a></h3>
		</div>
		<div class="container mt-7">
			<div class="order-message">
				<div class="icon-box d-inline-flex align-items-center">
					<div class="icon-box-icon mb-0">
						<svg xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
							<g>
								<path fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="10" d="
                        											M33.3,3.9c-2.7-1.1-5.6-1.8-8.7-1.8c-12.3,0-22.4,10-22.4,22.4c0,12.3,10,22.4,22.4,22.4c12.3,0,22.4-10,22.4-22.4
                        											c0-0.7,0-1.4-0.1-2.1"></path>
								<polyline fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="10" points="
                        											48,6.9 24.4,29.8 17.2,22.3 	"></polyline>
							</g>
						</svg>
					</div>
					<h3 class="icon-box-title">Cảm ơn bạn. Đã nhận được đơn hàng của bạn.</h3>
				</div>
			</div>
			<div class="order-details">
				<table class="order-details-table">
					<thead>
						<tr class="summary-subtotal">
							<td>
								<h3 class="summary-subtitle">Chi Tiết Đơn Hàng</h3>
							</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="product-subtitle">Sản Phẩm</td>
							<td></td>
						</tr>
						<?php
						$totalMoney = 0;
						if (!empty($products)) :
							foreach ($products as $product) :
						?>
								<tr>
									<td class="product-name"><?= $product['name'] ?>
										<span>
											<i class="p-icon-times"></i>
											<?= $_SESSION['cart'][$product['id']] ?>
										</span>
									</td>
									<?php
									$total = null;
									if ($product['sale']) {
										$total = $_SESSION['cart'][$product['id']] * $product['sale'];
									} else {
										$total = $_SESSION['cart'][$product['id']] * $product['price'];
									}
									$totalMoney += $total;
									?>
									<td class="product-price"><?= number_format($total, 0, ',', '.') ?> VNĐ</td>
								</tr>
						<?php endforeach;
						endif; ?>
						<tr class="summary-subtotal">
							<td>
								<h4 class="summary-subtitle">Tổng Phụ:</h4>
							</td>
							<td class="summary-value font-weight-normal"><?= number_format($totalMoney, 0, ',', '.') ?> VNĐ</td>
						</tr>
						<tr class="summary-subtotal">
							<td>
								<h4 class="summary-subtitle">Phương Thức Thanh Toán</h4>
							</td>
							<td class="summary-value">Thanh Toán Khi Nhận Hàng</td>
						</tr>
						<tr class="summary-subtotal">
							<td>
								<h4 class="summary-subtitle">Tổng:</h4>
							</td>
							<td>
								<p class="summary-total-price"><?= number_format($totalMoney, 0, ',', '.') ?> VNĐ</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>