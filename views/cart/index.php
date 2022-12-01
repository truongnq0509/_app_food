<main class="main cart">
	<div class="page-content pt-8 pb-10 mb-4">
		<div class="step-by pr-4 pl-4">
			<h3 class="title title-step active"><a href="index.php?controller=cart">1.Giỏ Hàng</a></h3>
			<h3 class="title title-step"><a href="index.php?controller=order">2.Đặt Hàng</a></h3>
			<h3 class="title title-step"><a href="index.php?controller=order&action=checkout">3.Hoàn Thành Đơn Hàng</a></h3>
		</div>
		<div class="container mt-7 mb-2">
			<div class="row">
				<form action="index.php?controller=cart&action=update" method="post" class="col-lg-8 col-md-12 pr-lg-6">
					<table class="shop-table cart-table">
						<thead>
							<tr>
								<th><span>Sản Phẩm</span></th>
								<th></th>
								<th><span>Giá</span></th>
								<th><span>Số Lượng</span></th>
								<th>Tổng Phụ</th>
							</tr>
						</thead>
						<tbody>
							<?php $totalMoney = 0;
							foreach ($products as $product) : ?>
								<tr>
									<td class="product-thumbnail">
										<figure>
											<a href="index.php?controller=product&action=detail&id=<?= $product['id'] ?>">
												<img src="./upload/<?= $product['image'] ?>" width="90" height="112" alt="product">
											</a>
										</figure>
									</td>
									<td class="product-name">
										<div class="product-name-section">
											<a href="index.php?controller=product&action=detail&id=<?= $product['id'] ?>"><?= $product['name'] ?></a>

										</div>
									</td>
									<td class="product-subtotal">
										<?php
										if ($product['sale']) :
										?>
											<span class="amount"><?= number_format($product['sale'], 0, ',', '.') ?></span>
										<?php else : ?>
											<span class="amount"><?= number_format($product['price'], 0, ',', '.') ?></span>
										<?php endif; ?>
									</td>
									<td class="product-quantity">
										<div class="input-group">
											<input class="form-control" name="quantity[<?= $product['id'] ?>]" value="<?= $_SESSION['cart'][$product['id']] ?>">
										</div>
									</td>
									<td class="product-price">
										<span class="amount">
											<?php
											$total = null;
											if ($product['sale']) {
												$total = $_SESSION['cart'][$product['id']] * $product['sale'];
											} else {
												$total = $_SESSION['cart'][$product['id']] * $product['price'];
											}
											$totalMoney += $total;
											echo number_format($total, 0, ',', '.');
											?>
										</span>
									</td>
									<td class="product-remove">
										<a href="index.php?controller=cart&action=delete&id=<?= $product['id'] ?>" class="btn-remove" title="Remove this product">
											<i class="p-icon-times"></i>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<div class="cart-actions mb-6 pt-6">
						<a href="index.php" class="btn btn-dim btn-icon-left mr-4 mb-4"><i class="p-icon-arrow-long-left"></i>Mua Hàng Tiếp</a>
						<button type="submit" class="btn btn-outline btn-dim">Cập Nhật Giỏ Hàng</button>
					</div>
				</form>
				<aside class="col-lg-4 sticky-sidebar-wrapper">
					<div class="sticky-sidebar" data-sticky-options="{'bottom': 20}">
						<div class="summary mb-4">
							<h3 class="summary-title">Tổng Giỏ Hàng</h3>
							<table class="total">
								<tr class="summary-subtotal">
									<td>
										<h4 class="summary-subtitle">Tổng Tiền</h4>
									</td>
									<td>
										<p class="summary-total-price ls-s"><?= number_format($totalMoney, 0, ',', '.') ?> VNĐ</p>
									</td>
								</tr>
							</table>
							<?php if ($totalMoney !== 0) : ?>
								<a href="index.php?controller=order" class="btn btn-dim btn-checkout btn-block">Thanh Toán</a>
							<?php else : ?>
								<script>
									alert('Giỏ Hàng Của Bạn Đang Trống')
								</script>
							<?php endif; ?>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</div>
</main>