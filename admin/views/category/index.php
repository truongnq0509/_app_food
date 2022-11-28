<div class="page-wrapper">
	<!--page-content-wrapper-->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="card radius-15">
				<div class="card-body">
					<div>
						<h5>DANH SÁCH DANH MỤC</h5>
						<hr />
						<div class="table-responsive">
							<table class="table table-striped table-bordered mb-0" id="table1">
								<thead class="thead-light">
									<tr>
										<th scope="col">#</th>
										<th scope="col">Danh Mục</th>
										<th scope="col">Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php $count = 0;
									foreach ($categorys as $category) : $count++; ?>
										<tr>
											<th scope="row"><?= $count ?></th>
											<td><?= $category['name']; ?></td>
											<td>
												<a href="index.php?controller=category&action=edit&id=<?= $category['id'] ?>">
													<p id="table2-new-row-button" class="btn btn-light btn-sm mb-2">
														<i class="fadeIn animated bx bx-edit-alt"></i>
													</p>
												</a>

												<a href="index.php?controller=category&action=delete&id=<?= $category['id'] ?>" onclick="return confirm('Có muốn xóa không !!!')">
													<p id="table2-new-row-button" class="btn btn-light btn-sm mb-2">
														<i class="fadeIn animated bx bx-eraser"></i>
													</p>
												</a>
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