<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section" style="height:112px; background: #222222; position: fixed;">
		<a href="index.html" class="site-logo">
			<img src="<?php echo base_url('img/Gaming mate.png');?>" alt="logo" >
		</a>
		<!-- <ul class="main-menu" style="background: #222222; position: fixed;">
			<li style="background: #222222;"><a href="<?php echo site_url('Mainpage') ?>">Home</a></li>
			<li style="background: #222222;"><a href="game.html">Games</a></li>
			<li style="background: #222222;"><a href="reviews.html">Reviews</a></li>
			<li style="background: #222222;"><a href="news.html">News</a></li>
			<?php //echo site_url('Member/logout') ?>
		</ul> -->

		<div class="header-add" style="background: #222222;">
			<header class="header-desktop" style="background: #222222;">
					<div class="section__content section__content--p30">
							<div class="container-fluid">
									<div class="header-wrap">
											<form class="form-header" action="" method="POST">
													<input hidden class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
													<button class="au-btn--submit" type="submit" hidden>
															<i class="zmdi zmdi-search" hidden></i>
													</button>
											</form>
											<div class="header-button">
													<div class="account-wrap">
															<div class="account-item clearfix js-item-menu">
																	<div class="image">
																			<img src="<?php echo base_url('img/profile/'.$_SESSION['m_img']); ?>" alt="John Doe" />
																	</div>
																	<div class="content">
																			<a class="js-acc-btn" href="#" style="color: #fff;"><?php echo $_SESSION['m_name']; ?></a>
																	</div>
																	<div class="account-dropdown js-dropdown">
																			<div class="info clearfix">
																					<div class="image">
																							<a href="#">
																									<img src="<?php echo base_url('img/profile/'.$_SESSION['m_img']); ?>" alt="John Doe" />
																							</a>
																					</div>
																					<div class="content">
																							<h5 class="name">
																									<a href="#"><?php echo $_SESSION['m_name']; ?></a>
																							</h5>
																							<span class="email"><?php echo $_SESSION['m_email']; ?></span>
																					</div>
																			</div>
																			<div class="account-dropdown__body">
																				<div class="account-dropdown__item">
																						<a href="<?php echo site_url('Admin/blog_form_register')?>">
																								<i class="zmdi zmdi-account"></i>Add News</a>
																				</div>
																				<div class="account-dropdown__item">
																						<a href="<?php echo site_url('Admin') ?>">
																								<i class="zmdi zmdi-account"></i>Admin Section</a>
																				</div>
																				<div class="account-dropdown__item">
																						<a href="<?php echo site_url('Mainpage/admin') ?>">
																								<i class="zmdi zmdi-settings"></i>Main Page</a>
																				</div>
																			</div>
																			<div class="account-dropdown__footer">
																					<a href="<?php echo site_url('Member/logout') ?>">
																							<i class="zmdi zmdi-power"></i>Logout</a>
																			</div>
																	</div>
															</div>
													</div>
											</div>
									</div>
							</div>
					</div>
			</header>
		</div>
	</header>
