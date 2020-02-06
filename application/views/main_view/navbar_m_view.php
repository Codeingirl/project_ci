<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<nav class="header-section">
		<a href="index.html" class="site-logo">
			<img src="<?php echo base_url('img/logo.png');?>" alt="logo" >
		</a>
		<ul class="main-menu">
			<li><a href="<?php echo site_url('Mainpage') ?>">Home</a></li>
			<li><a href="game.html">Games</a></li>
			<li><a href="reviews.html">Reviews</a></li>
			<li><a href="news.html">News</a></li>
			<li><a href="<?php echo site_url('Mainpage/sign_in') ?>">Sign In</a></li>
			<li><a href="" data-toggle="modal" data-target="#modalLoginForm">Log in</a></li>
		</ul>

		<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			 aria-hidden="true">
			 <div class="modal-dialog" role="document">
				 <div class="modal-content">
					 <div class="modal-header text-center">
						 <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
						 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
						 </button>
					 </div>
					 <div class="modal-body mx-3">
						 <div class="md-form mb-5">
							 <i class="fas fa-envelope prefix grey-text"></i>
							 <input type="email" id="defaultForm-email" class="form-control validate">
							 <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
						 </div>

						 <div class="md-form mb-4">
							 <i class="fas fa-lock prefix grey-text"></i>
							 <input type="password" id="defaultForm-pass" class="form-control validate">
							 <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
						 </div>

					 </div>
					 <div class="modal-footer d-flex justify-content-center">
						 <button class="btn btn-default">Login</button>
					 </div>
				 </div>
			 </div>
			</div>

		<!-- <div class="header-add">
			<img src="<?php// echo base_url('img/add.jpg');?>" alt="">
		</div> -->
	</nav>
