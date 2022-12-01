<main class="main">
	<div class="page-header" style="background-color: #fff7ec">
		<h1 class="page-title">Blog</h1>
	</div>
	<nav class="breadcrumb-nav">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="demo1.html">Home</a></li>
				<li><a href="blog.html">Blog</a></li>
			</ul>
		</div>
	</nav>
	<div class="page-content">
		<div class="container mb-10 pb-3">
			<div class="row">
				<div class="col-lg-12 pr-lg-6">
					<div class="posts row">
						<?php foreach ($blogs as $blog) : ?>
							<article class="post post-border post-classic overlay-zoom col-lg-6">
								<figure class="post-media">
									<a href="index.php?controller=blog&action=detail&id=<?= $blog['id'] ?>" style="display: flex; align-items: center; justify-content: center;	">
										<img src="./upload/<?= $blog['image'] ?>" style="width: 250px; height: 250px;" alt="post" />
									</a>
								</figure>
								<div class="post-details text-center">
									<div class="post-calendar">
										<?= $blog['created_date'] ?>
									</div>
									<h4 class="post-title"><a href="index.php?controller=blog&action=detail&id=<?= $blog['id'] ?>"><?= $blog['title'] ?></a></h4>
									<p class="post-content" style="
															display: -webkit-box;
															height: 16px*1.3*3;
															font-size: 16px;
															line-height: 1.3;
															-webkit-line-clamp: 3;  /* số dòng hiển thị */
															-webkit-box-orient: vertical;
															overflow: hidden;
															text-overflow: ellipsis;
															">
										<?= $blog['description'] ?>
									</p>
									<a href="index.php?controller=blog&action=detail&id=<?= $blog['id'] ?>" class="btn btn-outline btn-dark">Read
										more
									</a>
								</div>
							</article>
						<?php endforeach; ?>
					</div>
					<ul class="pagination justify-content-center pt-4 pb-4">
						<li class="page-item disabled">
							<a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
								<i class="p-icon-angle-left"></i>
							</a>
						</li>
						<li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item page-item-dots"></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item">
							<a class="page-link page-link-next" href="#" aria-label="Next">
								<i class="p-icon-angle-right"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</main>