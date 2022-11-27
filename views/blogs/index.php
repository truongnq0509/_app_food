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
				<div class="col-lg-9 pr-lg-6">
					<div class="posts">
						<?php foreach ($blogs as $blog): ?>
							<article class="post post-border post-classic overlay-zoom">
								<figure class="post-media">
									<a href="index.php?controller=blog&action=detail&id=<?=$blog['id']?>">
										<img src="./upload/<?= $blog['image']?>" width="250px" height="250px" alt="post" />
									</a>
								</figure>
								<div class="post-details text-center">
									<div class="post-calendar">
										<?= $blog['created_date'] ?>
									</div>
									<h4 class="post-title"><a href="index.php?controller=blog&action=detail&id=<?=$blog['id']?>"><?=$blog['title'] ?></a></h4>
									<p class="post-content">
										<?=$blog['description'] ?>	
									</p>
									<a href="index.php?controller=blog&action=detail&id=<?=$blog['id']?>" class="btn btn-outline btn-dark">Read
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
				<aside class="col-lg-3 right-sidebar sidebar-fixed sticky-sidebar-wrapper">
					<a class="sidebar-close" href="#"><i class="p-icon-times"></i></a>
					<a href="#" class="sidebar-toggle"><i class="fas fa-chevron-left"></i></a>
					<div class="sidebar-content">
						<div class="sticky-sidebar" data-sticky-options="{'paddingOffsetTop': 89, 'paddingOffsetBottom': 20}">
							<div class="widget widget-search border-no mb-9">
								<form action="#" class="form-simple">
									<input type="text" name="search" autocomplete="off" placeholder="Enter your keywords..." required />
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