<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<nav class="header-section" style="height:110px; background: #222222; position: fixed;">
		<a href="<?php echo site_url('Mainpage') ?>" class="site-logo">
			<img src="<?php echo base_url('img/Gaming mate.png');?>" alt="logo" >
		</a>
		<!-- <ul class="main-menu">
			<li><a href="<?php echo site_url('Mainpage') ?>">Home</a></li>
			<li><a href="game.html">Games</a></li>
			<li><a href="reviews.html">Reviews</a></li>
			<li><a href="news.html">News</a></li>
		</ul> -->
		<!-- Login form js -->
		<form action="<?php echo site_url('register/checklogin2') ?>" method="post">
		<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			 aria-hidden="true">
			 <div class="modal-dialog" role="document">
				 <div class="modal-content">
					 <div class="modal-header text-center">
						 <h4 class="modal-title w-100 font-weight-bold">Login</h4>
						 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
						 </button>
					 </div>
					 <div class="modal-body mx-3">
						 <div class="md-form mb-5">
							 <i class="fas fa-envelope prefix grey-text"></i>
							 <input type="email" id="defaultForm-email" name="m_email" class="form-control validate">
							 <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
						 </div>

						 <div class="md-form mb-4">
							 <i class="fas fa-lock prefix grey-text"></i>
							 <input type="password" id="defaultForm-pass" name="m_password"class="form-control validate">
							 <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
						 </div>

					 </div>
					 <div class="modal-footer d-flex justify-content-center">
						 <button class="btn btn-default">Login</button>
					 </form>
 <!-- Login form js -->
					 </div>
				 </div>
			 </div>
			</div>

		<div class="header-add">
			<ul class="main-menu"style="background: #222222;">
				<li><a href="<?php echo site_url('Home/sign_in') ?>">Sign in</a></li>
				<li><a href="" data-toggle="modal" data-target="#modalLoginForm">Log in</a></li>
			</ul>
		</div>
	</nav>
