<main class="main">
	<div class="page-header" style="background-color: #fff7ec">
		<h1 class="page-title">Chi Tiết</h1>
	</div>
	<nav class="breadcrumb-nav">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="demo1.html">Trang Chủ</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><?= $blog['title'] ?></li>
			</ul>
		</div>
	</nav>
	<div class="page-content">
		<div class="container mb-10 pb-6">
			<div class="row">
				<div class="col-lg-12 pr-lg-6">
					<div class="posts">
						<article class="post post-single">
							<figure class="post-media">
								<a href="#" style="display: flex; align-items: center; justify-content: center;	">
									<img src="./upload/<?= $blog['image'] ?>" alt="post" style="width: 400px;" />
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
			</div>
		</div>
	</div>
</main>