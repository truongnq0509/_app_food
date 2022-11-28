<div class="page-wrapper">
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="card radius-15">
				<div class="card-body">
					<div>
						<h5>Đơn Hàng</h5>
						<hr />
						<div class="table-responsive">
							<table class="table table-striped table-bordered mb-0" id="table1">
								<thead class="thead-light">
									<tr>
										<th scope="col">#</th>
										<th scope="col">Tên</th>
										<th scope="col">Email</th>
										<th scope="col">SĐT</th>
										<th scope="col">Địa Chỉ</th>
										<th scope="col">Ngày Đặt</th>
										<th scope="col">Tổng Tiền</th>
										<th scope="col">Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php $count = 0;
									foreach ($orders as $order) : $count++; ?>
										<tr>
											<th scope="row"><?= $count ?></th>
											<td><?= $order['fullname'] ?></td>
											<td><?= $order['email'] ?></td>
											<td><?= $order['phone'] ?></td>
											<td><?= $order['address'] ?></td>
											<td><?= date_format(date_create($order['order_date']), 'd-m-Y H:i:s') ?></td>
											<td><?= number_format($order['total_money'], 0, ',', '.') ?> VNĐ</td>
											<td>
												<?php if ($order['status'] === 0) : ?>
													<a href="index.php?controller=order&action=edit&id=<?= $order['id'] ?>">
														<p id="table2-new-row-button" class="btn btn-light btn-sm mb-2">
															<i class="fadeIn animated bx bx-edit-alt"></i>
														</p>
													</a>
													<a href="index.php?controller=order&action=delete&id=<?= $order['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa đơn hàng này không !!!')">
														<p id="table2-new-row-button" class="btn btn-light btn-sm mb-2">
															<i class="fadeIn animated bx bx-eraser"></i>
														</p>
													</a>
												<?php endif; ?>

												<?php if ($order['status'] === 1) : ?>
													<a href="index.php?controller=order&action=info&id=<?= $order['id'] ?>">
														<p id="table2-new-row-button" class="btn btn-light btn-sm mb-2">
															<i class="fadeIn animated bx bx-info-circle"></i>
														</p>
													</a>
												<?php endif; ?>
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