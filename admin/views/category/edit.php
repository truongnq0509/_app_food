<div class="page-wrapper">
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="card radius-15">
				<div class="card-body p-5">
					<div class="card-title d-flex align-items-center">
						<h4 class="mb-0 text-white">CẬP NHẬT DANH MỤC</h4>
					</div>
					<hr />
					<div class="form-body">
						<form action="index.php?controller=category&action=update" method="post" enctype="multipart/form-data" id="category-form--edit">
							<div class="form-group">
								<label>Danh mục</label>
								<input type="text" name="name" id="name" rules="required" class="form-control" value="<?= $category['name'] ?>" />
								<span class="form-message"></span>
							</div>

							<input type="text" name="id" value="<?= $category['id'] ?>" hidden />

							<button type="submit" class="btn btn-light px-5">Cập nhật</button>
							<button type="reset" class="btn btn-light px-5">Nhập lại</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="overlay toggle-btn-mobile"></div>
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>