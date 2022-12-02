<div class="wrapper">
	<div class="page-wrapper">
		<div class="page-content-wrapper">
			<div class="page-content">
				<a href="index.php?controller=galery&action=form&id=<?= $id ?>" class="btn btn-light my-3 px-5">Thêm</a>

				<div class="card radius-15">
					<div class="card-body">
						<h5>DANH SÁCH ẢNH</h5>
						<hr />
						<div class="table-responsive">
							<table class="table table-striped table-bordered mb-0" id="table1">

								<thead class="thead-light">
									<tr>
										<th scope="col" style="width: 100px;">#</th>
										<th scope="col" style="width: 250px;">Ảnh</th>
										<th scope="col" style="width: 250px;">Actions</th>
									</tr>
								</thead>
								<?php
								$count = 0;
								foreach ($galerys as $value) :  $count++;
								?>
									<tbody>
										<tr>
											<th scope="row"><?php echo $count ?></th>
											<td>
												<img style="min-width: 100px; height: 100px; " src="../upload/<?php echo $value['image'] ?>" class="img-thumbnail" alt="">
											</td>
											<td>
												<a href="index.php?controller=galery&action=edit&id=<?php echo $value['id'] ?>&pId=<?= $id ?>">
													<p id="table2-new-row-button" class="btn btn-light btn-sm mb-2">
														<i class="fadeIn animated bx bx-edit-alt"></i>
													</p>
												</a>

												<a href="index.php?controller=galery&action=delete&id=<?php echo $value['id'] ?>&pId=<?= $id ?>">
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
	</div>
	<div class="overlay toggle-btn-mobile"></div>
	<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
</div>