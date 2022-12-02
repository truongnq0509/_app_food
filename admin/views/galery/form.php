<div class="page-wrapper">
	<!--page-content-wrapper-->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="card radius-15">
				<div class="card-body">
					<form action="index.php?controller=galery&action=saveadd&id=<?= $id ?>" method="POST" enctype="multipart/form-data" id="product-form">
						<div class="card-body p-5">
							<div class="card-title d-flex align-items-center">
								<h4 class="mb-0 text-white">THÊM ẢNH</h4>
							</div>
							<hr />
							<div class="form-body">
								<div class="form-group">
									<label>Ảnh</label>
									<br>
									<input type="file" name="image[]" multiple id="image" rules="required" />
									<span class="form-message"></span>
								</div>
								<button type="submit" class="btn btn-light px-5">Thêm</button>
								<button type="reset" class="btn btn-light px-5">Nhập lại</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>