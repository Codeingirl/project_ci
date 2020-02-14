<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-post single-post">
            <br><br>
						<h3>Sign in</h3>
						<div class="comments">
              <form  action="<?php echo site_url('register/adding') ?>" method="post" enctype="multipart/form-data" class="comment-form">
              <div class="col-md-6">
                <input type="file" name="m_img"  accept="img/*"></div>

            				<div class="col-md-6">
            					<input type="text" name="m_user"  required placeholder="Usename"></div>

										<div class="col-md-6">
	            				<input type="text" name="m_email"  required placeholder=" Your Email xxxxx@xxx.xx"></div>


										<div class="col-md-6">
	            					<input type="password" name="m_password"  required placeholder="Password"></div>

										<div class="col-md-6">
												<input type="password" name="m_confirmpassword"  required placeholder="Confirm Password"></div>

                    <div class="col-md-6">
                        <input type="text" name="m_name"  required placeholder="Name"></div>

            				<div class="col-md-6">
            						<input type="text" name="m_lname"  required placeholder="Last Name"></div>

										<div class="col-md-6">
	            					<input type="text" name="m_tel"  required placeholder="Your tel"></div>

                        <div class="col-md-12">
      										<button  type="submit" class="site-btn">Sign in</button>
      									</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->
