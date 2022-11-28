<div class="section-authentication-login d-flex align-items-center justify-content-center">
	<div class="row">
		<div class="col-12 col-lg-10 mx-auto">
			<div class="card radius-15">
				<div class="row no-gutters">
					<div class="col-lg-6">
						<form action="index.php?controller=home&action=login" method="post" id="login-form">
							<div class="card-body p-md-5">
								<div class="text-center">
									<img src="assets/images/logo-icon.png" width="80" alt="">
									<h3 class="mt-4 font-weight-bold">Dev Food</h3>
								</div>
								<div class="form-group mt-4">
									<label>Email</label>
									<input type="text" name="email" id="email" rules="required|email" class="form-control" placeholder="" style="margin-bottom: 12px;" />
									<span class="form-message"></span>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" id="password" class="form-control" rules="required|min:6" placeholder="" style="margin-bottom: 12px;" />
									<span class="form-message"></span>
								</div>
								<div class="btn-group mt-3 w-100">
									<button type="submit" class="btn btn-light btn-block">Log In</button>
								</div>
								<hr>
							</div>
						</form>
					</div>
					<div class="col-lg-6">
						<img src="../public/back-end/assets/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
</div>