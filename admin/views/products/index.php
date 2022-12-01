<div class="wrapper">
	<div class="page-wrapper">
		<div class="page-content-wrapper">
			<div class="page-content">
				<div class="card radius-15">
					<div class="card-body">
						<h5>DANH SÁCH SẢN PHẨM</h5>
						<hr />
						<div class="table-responsive">
							<table class="table table-striped table-bordered mb-0" id="table1">

								<thead class="thead-light">
									<tr>
										<th scope="col">#</th>
										<th scope="col">Sản Phẩm</th>
										<th scope="col">Giá</th>
										<th scope="col">Giảm Giá</th>
										<th scope="col" style="width: 100px ;">Ảnh</th>
										<th scope="col">Tồn Kho</th>
										<th scope="col">Danh Mục</th>
										<th scope="col">Actions</th>
									</tr>
								</thead>
								<?php
								$count = 0;
								foreach ($products as $value) :  $count++;
								?>
									<tbody>
										<tr>
											<th scope="row"><?php echo $count ?></th>
											<td><?php echo $value['name'] ?></td>
											<td><?= number_format($value['price'], 0, ',', '.') ?> VNĐ</td>
											<td><?= number_format($value['sale'], 0, ',', '.') ?> VNĐ</td>
											<td>
												<img style="min-width: 100px; height: 100px; " src="../upload/<?php echo $value['image'] ?>" class="img-thumbnail" alt="">
											</td>

											<td><?php echo $value['quantity'] ?></td>
											<td>
												<?php echo find('categorys', $value['category_id'])['name'] ?>
											</td>
											<td>
												<a href="index.php?controller=product&action=edit&id=<?php echo $value['id'] ?>">
													<p id="table2-new-row-button" class="btn btn-light btn-sm mb-2">
														<i class="fadeIn animated bx bx-edit-alt"></i>
													</p>
												</a>

												<a href="index.php?controller=product&action=delete&id=<?php echo $value['id'] ?>">
													<p id="table2-new-row-button" onclick=" return confirm('Bạn có muốn xóa không !')" class="btn btn-light btn-sm mb-2">
														<i class="fadeIn animated bx bx-eraser"></i>
													</p>
												</a>
											</td>
										</tr>
									</tbody>
								<?php endforeach ?>
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
	<!--End Back To Top Button-->
</div>