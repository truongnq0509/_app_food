<main class="main">
	<div class="page-header" style="background-color: #fff7ec">
		<h1 class="page-title">Chi Tiết</h1>
	</div>
	<nav class="breadcrumb-nav">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="demo1.html">Home</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><?= $blog['title'] ?></li>
			</ul>
		</div>
	</nav>
	<div class="page-content">
		<div class="container mb-10 pb-6">
			<div class="row">
				<div class="col-lg-9 pr-lg-6">
					<div class="posts">
						<article class="post post-single">
							<figure class="post-media">
								<a href="#">
									<img src="./upload/<?= $blog['image'] ?>" width="905" height="500" alt="post" />
								</a>
							</figure>
							<div class="post-details mt-6">
								<div class="post-meta">
									by
									<a href="#" title="Posts by John Doe" class="text-uppercase ml-1 mr-1" rel="author">Admin</a>
									on
									<span class="post-date ml-1"><a href="#"><?= $blog['created_date'] ?></a></span>
									<span class="divider mr-2 ml-2"></span>
								</div>
								<h4 class="post-title"><?= $blog['title'] ?></h4>
								<p>
									<?= $blog['description'] ?>
								</p>
							</div>
						</article>
					</div>
					<!-- End Posts -->
				</div>
				<aside class="col-lg-3 right-sidebar sidebar-fixed sticky-sidebar-wrapper">
					<a class="sidebar-close" href="#"><i class="p-icon-times"></i></a>
					<a href="#" class="sidebar-toggle"><i class="fas fa-chevron-left"></i></a>
					<div class="sidebar-content">
						<div class="sticky-sidebar" data-sticky-options="{'paddingOffsetTop': 89, 'paddingOffsetBottom': 20}">
							<div class="widget widget-search border-no mb-9">
								<form action="#" class="form-simple">
									<input type="text" name="search" autocomplete="off" placeholder="Enter..." required />
									<button class="btn btn-search btn-link" type="submit">
										<i class="p-icon-search-solid"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</div>
</main>