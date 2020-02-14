<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-post single-post">
            <br><br>
						<h3>Change Password</h3>
						<div class="comments">
              <form  action="<?php echo site_url('register/m_edit_password') ?>" method="post" enctype="multipart/form-data" class="comment-form">
              <div class="col-md-12">

										<div class="col-md-12">
	            					<input type="password" name="m_password"  required placeholder="Password"></div>

										<div class="col-md-12">
												<input type="password" name="m_confirmpassword"  required placeholder="Confirm Password"></div>


                        <div class="col-md-12">
      										<button  type="submit" class="site-btn">Change Password</button>
      									</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-4 sidebar">
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->
