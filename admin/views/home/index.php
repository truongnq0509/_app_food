<div class="page-wrapper">
	<!--page-content-wrapper-->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="row">
				<div class="col-12 col-lg-4">
					<div class="card radius-15">
						<div class="card-body">
							<div class="media align-items-center">
								<div class="media-body">
									<h4 class="mb-0 font-weight-bold text-white"><?= count($orders) ?></h4>
									<p class="mb-0 text-white">Đơn Hàng</p>
								</div>
								<div class="font-35 text-white"><i class='bx bx-cart-alt'></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="card radius-15">
						<div class="card-body">
							<div class="media align-items-center">
								<div class="media-body">
									<h4 class="mb-0 font-weight-bold text-white"><?= count($products) ?></h4>
									<p class="mb-0 text-white">Sản Phẩm</p>
								</div>
								<div class="font-35 text-white"><i class='bx bx-cart'></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="card radius-15">
						<div class="card-body">
							<div class="media align-items-center">
								<div class="media-body">
									<h4 class="mb-0 font-weight-bold text-white"><?= count($users) ?></h4>
									<p class="mb-0 text-white">Khách Hàng</p>
								</div>
								<div class="font-35 text-white"><i class='bx bx-user'></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="card radius-15">
						<div class="card-body">
							<div class="media align-items-center">
								<div class="media-body">
									<h4 class="mb-0 font-weight-bold text-white"><?= count($blogs) ?></h4>
									<p class="mb-0 text-white">Blog</p>
								</div>
								<div class="font-35 text-white"><i class='bx bxl-blogger'></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-lg-4">
					<div class="card radius-15">
						<div class="card-body">
							<div class="media align-items-center">
								<div class="media-body">
									<h4 class="mb-0 font-weight-bold text-white"><?= number_format($totalMoney, 0, ',', '.') ?> VNĐ</h4>
									<p class="mb-0 text-white">Tổng Doanh Thu</p>
								</div>
								<div class="font-35 text-white"><i class='bx bx-money'></i>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="card radius-15">
				<div class="card-body">
					<div class="card-title">
						<h4 class="mb-0">Top 5 món ăn bán chạy nhất</h4>
					</div>
					<hr />
					<div class="table-responsive">
						<table id="" class="table table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>STT</th>
									<th>Tên</th>
									<th>Giá</th>
									<th>Giảm Giá</th>
									<th>Ảnh</th>
									<th>Rank</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$count = 0;
								foreach ($topProduct as $item) : $count++
								?>
									<tr>
										<td><?= $count ?></td>
										<td><?= $item['name'] ?></td>
										<td><?= number_format($item['price'], 0, ',', '.') ?> VNĐ</td>
										<td><?= number_format($item['sale'], 0, ',', '.') ?> VNĐ</td>
										<td style="width: 60px; height: 60px;">
											<img src="../upload/<?php echo $item['image'] ?>" width="60px" height="60px" class="rounded shadow" alt="" />
										</td>
										<td>
											<i class='font-30 bx bx-medal'></i>
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
	<!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->
<!--start overlay-->
<div class="overlay toggle-btn-mobile"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>