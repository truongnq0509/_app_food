<div class="page-wrapper">
	<!--page-content-wrapper-->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="card radius-15">
				<div class="card-body">
					<form action="index.php?controller=galery&action=update&pId=<?= $id ?>" method="POST" enctype="multipart/form-data" id="product-form">
						<div class="card-body p-5">
							<div class="card-title d-flex align-items-center">
								<h4 class="mb-0 text-white">CẬP NHẬT ẢNH</h4>
							</div>
							<hr />
							<div class="form-body">
								<div class="form-group">
									<label>Ảnh</label>
									<br>
									<img src="../upload/<?php echo $galery['image'] ?>" alt="" style="width: 100px; height: 100px;" class="img-thumbnail">
									<input type="file" name="image" id="image" />
									<input type="text" name="hinhcu" value="<?php echo $galery['image'] ?>" hidden>
								</div>
								<input type="text" name="id" value="<?php echo $galery['id'] ?>" hidden>
								<button type="submit" class="btn btn-light px-5">CẬP NHẬT</button>
								<button type="reset" class="btn btn-light px-5">Nhập lại</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>