<main class="main checkout">
	<div class="page-content pt-8 pb-10 mb-4">
		<div class="step-by pr-4 pl-4">
			<h3 class="title title-step"><a href="index.php?controller=cart">1.Giỏ Hàng</a></h3>
			<h3 class="title title-step active"><a href="index.php?controller=order">2.Đặt Hàng</a></h3>
		</div>
		<div class="container mt-7">
			<form action="index.php?controller=order&action=add" method="post" id="order-form">
				<div class="row">
					<div class="col-lg-7 mb-6 mb-lg-0 check-detail">
						<h3 class="title text-left mt-3 mb-6">Thông Tin</h3>
						<div class="form-group">
							<label>Tên</label>
							<input type="text" id="fullname" name="fullname" rules="required" placeholder="Người Nhận" class="form-control" value="<?php echo !empty($_SESSION['user']) ? $_SESSION['user']['fullname'] : '' ?>">
							<span class="form-message" style="color: #ff0000;"></span>
						</div>
						<input type="text" id="user_id" name="user_id" style="display: none;" value="<?php echo !empty($_SESSION['user']) ? $_SESSION['user']['id'] : '' ?>">

						<div class="row">
							<div class="col-xs-6 form-group">
								<label>Email</label>
								<input type="text" class="form-control" rules="required|email" name="email" placeholder="Email" value="<?php echo !empty($_SESSION['user']) ? $_SESSION['user']['email'] : '' ?>" />
								<span class="form-message" style="color: #ff0000;"></span>
							</div>
							<div class="col-xs-6 form-group">
								<label>Phone</label>
								<input type="text" class="form-control" rules="required|phone" name="phone" placeholder="SĐT" value="<?php echo !empty($_SESSION['user']) ? $_SESSION['user']['phone'] : '' ?>" />
								<span class="form-message" style="color: #ff0000;"></span>
							</div>
						</div>
						<div class="form-group">
							<label>Địa Chỉ</label>
							<input type="text" class="form-control" name="address" rules="required" placeholder="Địa Chỉ" value="<?php echo !empty($_SESSION['user']) ? $_SESSION['user']['address'] : '' ?>" />
							<span class="form-message" style="color: #ff0000;"></span>
						</div>
						<div class="form-group">
							<label>Ghi Chú</label>
							<textarea class="form-control mb-0" cols="30" rows="5" rules="required" name="note" placeholder="Điền Vào Đây ......"></textarea>
							<span class="form-message" style="color: #ff0000;"></span>
						</div>
					</div>
					<aside class="col-lg-5 sticky-sidebar-wrapper  pl-lg-6">
						<div class="sticky-sidebar" data-sticky-options="{'bottom': 50}">
							<div class="summary pt-5">
								<h3 class="title">Đơn Hàng Của Bạn</h3>
								<table class="order-sidebar">
									<thead>
										<tr>
											<th></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php $totalMoney = 0;
										foreach ($products as $product) : ?>
											<tr>
												<td class="product-name"><?= $product['name'] ?><span class="product-quantity" style="color: red;">&times;<?= $_SESSION['cart'][$product['id']] ?></span></td>
												<td class="product-total text-body">
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
												</td>
											</tr>
										<?php endforeach; ?>
										<tr class="summary-subtotal">
											<td>
												<h4 class="summary-subtitle">Tổng Phụ</h4>
											</td>
											<td class="summary-subtotal-price">
												<?= number_format($totalMoney, 0, ',', '.') ?> VNĐ
											</td>
										</tr>
										<tr class="summary-total">
											<td>
												<h4 class="summary-subtitle">Tổng</h4>
											</td>
											<td>
												<p class="summary-total-price ls-s"><?= number_format($totalMoney, 0, ',', '.') ?> VNĐ</p>
											</td>
										</tr>
									</tbody>
								</table>
								<button type="submit" class="btn btn-dim btn-block mt-6">Đặt Hàng</button>
							</div>
						</div>
					</aside>
				</div>
			</form>
		</div>
	</div>
</main>