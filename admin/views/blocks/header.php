<header class="top-header">
	<nav class="navbar navbar-expand">
		<div class="right-topbar ml-auto">
			<ul class="navbar-nav">
				<li class="nav-item dropdown dropdown-user-profile">
					<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
						<div class="media user-box align-items-center">
							<div class="media-body user-info">

								<p class="user-name mb-0"><?php echo $_SESSION['user']['fullname']?></p>
								<p class="designattion mb-0">devfood</p>
							</div>
							<img src="https://dbk.vn/uploads/ckfinder/images/tranh-anh/anh-buon-1.jpg" class="user-img" alt="user avatar">
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-right"> 
						<a class="dropdown-item" href="#"><i class="bx bx-user"></i><span>Thông Tin</span></a>
						<!-- <a class="dropdown-item" href="#"><i class="bx bx-log-in"></i><span>Trang </span></a> -->
						<div class="dropdown-divider mb-0"></div> <a class="dropdown-item" href="http://localhost:8080/devfood/dev-food/"><i class="bx bx-power-off"></i><span>Log Out</span></a>

					</div>
				</li>
			</ul>
		</div>
	</nav>
</header>