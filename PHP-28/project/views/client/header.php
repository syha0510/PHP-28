<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>TSH</title>
	<meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- STYLES -->
	<link rel="stylesheet" href="publics/client/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="publics/client/css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="publics/client/css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="publics/client/css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="publics/client/css/style.css" type="text/css" media="all">
	<link rel="shortcut icon" href="publics/images/logo.jpg" />
	

</head>

<body>

<!-- preloader -->
<div id="preloader">
	<div class="book">
		<div class="inner">
			<div class="left"></div>
			<div class="middle"></div>
			<div class="right"></div>
		</div>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>

<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

	<!-- header -->
	<header class="header-classic">

			<div class="container-xl">
				<!-- header top -->
				<div class="header-top">
					<div class="row align-items-center">

						<div class="col-md-4 col-xs-12">
							<!-- site logo -->
							<a class="navbar-brand" href="index.php"><img style="width:100px;height:50px;" src="publics/images/logo.jpg" alt="logo"></a>
						</div>

						<div class="col-md-8 d-none d-md-block">
							<!-- social icons -->
							<ul class="social-icons list-unstyled list-inline mb-0 float-end">
								<li class="list-inline-item"><a href="https://www.facebook.com/ha2nd"><i class="fab fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="https://www.youtube.com/channel/UCxk2mgpbMFHamHowJczOyzA"><i class="fab fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="https://www.instagram.com/im_syhaa/"><i class="fab fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="https://www.instagram.com/im_syhaa/"><i class="fab fa-pinterest"></i></a></li>
								<li class="list-inline-item"><a href="https://www.instagram.com/im_syhaa/"><i class="fab fa-medium"></i></a></li>
								<li class="list-inline-item"><a href="https://www.youtube.com/channel/UCxk2mgpbMFHamHowJczOyzA"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg">
				<!-- header bottom -->
				<div class="header-bottom  w-100">

					<div class="container-xl">
						<div class="d-flex align-items-center">
							<div class="collapse navbar-collapse flex-grow-1">
								<!-- menus -->
								<ul class="navbar-nav">
									<li class="nav-item dropdown active">
										<a class="nav-link"  href="index.php">Trang chủ</a>
									</li>
									<?php foreach ($getCategory as $key => $value): ?>
										<li class="nav-item">
											<a class="nav-link" href="?admin=admin&mod=post&act=getCategory&id=<?= $value['id'] ?>"><?= $value['name'] ?></a>
										</li>
									<?php endforeach; ?>


								</ul>
							</div>

							<!-- header buttons -->
							<div class="header-buttons">
								<form class="d-flex search-form" method="post" action="?admin=admin&mod=post&act=search">
									<input name="keyWord" class="form-control me-2" type="search" placeholder="Tìm kiếm ..." aria-label="Search">
									<button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
								</form>

							</div>
						</div>
					</div>

				</div>
			</nav>

	</header>
	<div class="search-popup">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>
	<!-- content -->
	<div class="search-content">
		<div class="text-center">
			<h3 class="mb-4 mt-0">Ấn ESC để đóng</h3>
		</div>
		<!-- form -->

	</div>
</div>
