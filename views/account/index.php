<main class="main">
	<div class="page-header" style="background-color: #f9f8f4">
		<h1 class="page-title">Tài Khoản</h1>
	</div>
	<nav class="breadcrumb-nav has-border">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Trang Chủ</a></li>
				<li><a href="index.php?controller=product">Cửa Hàng</a></li>
				<li>Tài Khoản</li>
			</ul>
		</div>
	</nav>
	<div class="page-content">
		<div class="container pt-8 pb-10">
			<div class="login-popup mx-auto pl-6 pr-6 pb-9">
				<div class="form-box">
					<div class="tab tab-nav-underline tab-nav-boxed">
						<ul class="nav nav-tabs nav-fill align-items-center justify-content-center mb-4">
							<li class="nav-item">
								<a class="nav-link active lh-1 ls-normal" href="#signin-1">Đăng Nhập</a>
							</li>
							<li class="nav-item">
								<a href="#register-1" class="nav-link lh-1 ls-normal">Đăng Ký</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="signin-1">
								<form action="index.php?controller=account&action=login" method="POST" id="login-form">
									<div class="form-group">
										<input type="text" id="email" name="email" rules="required|email" placeholder="Email..." class="form-control">
										<span class="form-message"></span>
									</div>

									<div class="form-group">
										<input type="password" id="password" name="password" rules="required|min:6" placeholder="Password" class="form-control">
										<span class="form-message"></span>
									</div>
									<input class="btn btn-dark btn-block" type="submit" value="Đăng Ký" />
								</form>
							</div>
							<div class="tab-pane" id="register-1">
								<form action="index.php?controller=account&action=register" method="POST" id="register-form">
									<div class="form-group">
										<input type="text" id="fullname" name="fullname" rules="required" placeholder="Fullname...">
										<span class="form-message"></span>
									</div>

									<input type="text" id="role_id" name="role_id" value="2" hidden style="display: none;">

									<div class="form-group">
										<input type="email" id="email" name="email" rules="required|email" placeholder="Email...">
										<span class="form-message"></span>
									</div>

									<div class="form-group">
										<input type="password" id="password" name="password" rules="required|min:6" placeholder="Password">
										<span class="form-message"></span>
									</div>

									<div class="form-group">
										<input type="text" id="phone" name="phone" rules="required|phone" placeholder="Phone">
										<span class="form-message"></span>
									</div>

									<div class="form-group">
										<textarea type="" id="address" name="address" rules="required|min:10" placeholder="Address"></textarea>
										<span class="form-message"></span>
									</div>
									<button class="btn btn-dark btn-block form-submit" type="submit">Đăng Ký</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php if ($isCheck) : ?>
	<script>
		alert("Bạn đã đăng ký thành công !!!")
	</script>
<?php endif; ?>

<?php if (!$message) : ?>
	<script>
		alert("Thông tin tài khoản hoặc mật khẩu không chính xác 😡😡😡")
	</script>
<?php endif; ?>