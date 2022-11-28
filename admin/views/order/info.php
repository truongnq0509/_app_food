<div class="page-wrapper">
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="card-body">
				<div class="card-title">
					<h4 class="mb-0">Hóa Đơn #<?= rand(90000, 100000) ?></h4>
				</div>
				<hr>
				<div class="card radius-15">
					<div class="card-body">
						<div class="card-title">
							<h4 class="mb-2"><?= $order['fullname'] ?></h4>
							<h6 class="mb-2">Ngày Đặt: <?= $order['order_date'] ?></h6>
							<h6 class="mb-2">Người Giao: Nguyễn Quang Trường</h6>
							<h6 class="mb-2">Phương Thức Thanh Toán: Thanh Toán Khi Nhận Hàng</h5>
						</div>
						<hr />
						<div class="table-responsive">
							<table class="table mb-0">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Sản Phẩm</th>
										<th scope="col">Giá</th>
										<th scope="col">Số Lượng</th>
										<th scope="col">Tổng Tiền</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$totalMoney = 0;
									$count = 0;
									foreach ($products as $key => $product) :  $count++; ?>
										<tr>
											<th scope="row"><?= $count ?></th>
											<td><?= $product['name'] ?></td>
											<td>
												<?php
												if ($product['sale']) :
												?>
													<?= number_format($product['sale'], 0, ',', '.') ?> VNĐ
												<?php
												else :
												?>
													<?= number_format($product['price'], 0, ',', '.') ?> VNĐ
												<?php
												endif;
												?>
											</td>
											<td>
												<?= $orderDetail[$key]['quantity'] ?>
											</td>
											<td>
												<?php
												$total = 0;
												if ($product['sale']) {
													$total = $product['sale'] * $orderDetail[$key]['quantity'];
													echo number_format($total, 0, ',', '.') . ' VNĐ';
												} else {
													$total = $product['price'] * $orderDetail[$key]['quantity'];
													echo number_format($total, 0, ',', '.') . ' VNĐ';
												}
												$totalMoney += $total;
												?>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="overlay toggle-btn-mobile"></div>
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>