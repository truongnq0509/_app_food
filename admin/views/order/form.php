<div class="page-wrapper">
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="card-body">
				<div class="card-title">
					<h4 class="mb-0">Cập Nhật Đơn Hàng</h4>
				</div>
				<hr>
				<form action="index.php?controller=order&action=update&id=<?= $order['id']?>" method="post">
					<div class="row">
						<div class="form-body col-sm-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Tên Người Nhận</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" value="<?= $order['fullname'] ?>" name="fullname">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label">SĐT</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" value="<?= $order['phone'] ?>" name="phone">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Ngày Đặt</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" value="<?= $order['order_date'] ?>" name="order_date">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Địa Chỉ</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" value="<?= $order['address'] ?>" name="address">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Ghi Chú</label>
								<div class="col-sm-9">
									<textarea class="form-control" rows="3" cols="3" name="note"><?= $order['note'] ?></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Chưa Xác Nhận</label>
								<div class="col-sm-3">
									<input type="radio" class="form-control" value="0" <?php echo $order['status'] === 0 ? 'checked' : ''; ?> name="status[]">
								</div>
								
								<label class="col-sm-2 col-form-label">Đã Xác Nhận</label>
								<div class="col-sm-3">
									<input type="radio" class="form-control" value="1" <?php echo $order['status'] === 1 ? 'checked' : ''; ?> name="status[]">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"></label>
								<div class="col-sm-9">
									<button type="submit" class="btn btn-light px-4" >Cập Nhật</button>
								</div>
							</div>
						</div>
						<div class="form-body col-sm-6">
							<?php foreach ($products as $key => $product) : ?>
								<div class="form-group row">
									<div class="col-sm-6">
										<input type="text" class="form-control" disabled style="border: none;" value="<?= $product['name'] ?>">
									</div>
									<div class="col-sm-2">
										<input type="number" class="form-control" min="1" value="<?= $orderDetail[$key]['quantity'] ?>" name="quantity[<?= $product['id']?>]">
									</div>
									<div class="col-sm-4">
										<?php
										if ($product['sale']) :
										?>
											<input type="text" class="form-control" disabled style="border: none;" value="<?= number_format($product['sale'], 0, ',', '.')?> VNĐ">
										<?php
										else :
										?>
											<input type="text" class="form-control" disabled style="border: none;" value="<?= number_format($product['price'], 0, ',', '.')?> VNĐ">
										<?php
										endif;
										?>
									</div>
								</div>
							<?php endforeach; ?>
							<div class="form-group row">
								<div class="col-sm-6">
									<input type="text" class="form-control" disabled style="border: none;" value="Tổng Tiền">
								</div>
								<div class="col-sm-2">
								</div>
								<div class="col-sm-4">
									<input type="text" class="form-control" disabled style="border: none;" value="<?= number_format($order['total_money'], 0, ',', '.')?> VNĐ">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="overlay toggle-btn-mobile"></div>
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>