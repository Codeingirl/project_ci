<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section" style="height:112px;">
		<a href="index.html" class="site-logo">
			<img src="<?php echo base_url('img/logo.png');?>" alt="logo" >
		</a>
		<ul class="main-menu">
			<li><a href="<?php echo site_url('Mainpage') ?>">Home</a></li>
			<li><a href="game.html">Games</a></li>
			<li><a href="reviews.html">Reviews</a></li>
			<li><a href="news.html">News</a></li>
		</ul>
		<!-- model -->
		<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			  aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel"><p><?php echo $_SESSION['m_name'] ?></p>Your Accout</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
						<div class="modal-body main-menu">
								<div class="row">
									<ul class="main-menu">
									 <li><a href="<?php echo site_url('Admin') ?>">Edit Your Information</a></li>
									</ul>
								</div>
								<div class="row">
									<ul class="main-menu">
										<li><a href="<?php echo site_url('Admin') ?>">Change Picture Profile</a></li>
									</ul>
								</div>
								<div class="row">
									<ul class="main-menu">
										<li><a href="<?php echo site_url('Admin') ?>">Change Password</a></li>
									</ul>
								</div>
								<div class="row">
									<ul class="main-menu">
										<li><a href="<?php echo site_url('Member/logout') ?>">Log Out</a></li>
									</ul>
								</div>
					</div>

		      </div>
		    </div>
		  </div>
		</div>
		<!-- model -->
		<!-- profile thumbnail-->
		<div class="header-add">
			<style>
			.pic {
				height:auto;
				size: 50px;
			  border-radius: 10%;  /* Rounded border */
			  padding: 5px; /* Some padding */
			  width: 100px;
				/* Set a small width */
			}
			</style>
			<a target="_blank" href="" data-toggle="modal" data-target="#basicExampleModal">
  			<img class="pic" src="<?php echo base_url('img/profile/') ?><?php echo $_SESSION['m_img'] ?>">
			</a>
		</div>
		<!-- profile thumbnail-->
	</header>
