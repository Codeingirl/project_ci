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
								<div class="row">

            				<div class="col-md-6">
            					<input type="text" name="m_user"  required placeholder="Usename"></div>



                      <div class="col-md-6">
                        <input type="text" name="m_name"  required placeholder="Name"></div>

											<div class="col-md-6">
	            					<input type="password" name="m_password"  required placeholder="Password"></div>

            					<div class="col-md-6">
            						<input type="text" name="m_lname"  required placeholder="Last Name"></div>

											<div class="col-md-6">
	              				<input type="password" name="m_confirmpassword"  required placeholder="Confirm Password"></div>

											<div class="col-md-6">
	            					<input type="text" name="m_tel"  required placeholder="Your tel"></div>

            					<div class="col-md-6">
            						<input type="text" name="m_email"  required placeholder=" Your Email xxxxx@xxx.xx"></div>



                        <div class="col-md-12">
      										<button  type="submit" class="site-btn">Sign in</button>
      									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-4 sidebar">
					<div class="sb-widget">
            <br><br>
						<h2 class="sb-title">Categories</h2>
						<ul class="sb-cata-list">
							<li><a href="">Games<span>20</span></a></li>
							<li><a href="">Gaming Tips & Tricks<span>23</span></a></li>
							<li><a href="">Online Games<span>25</span></a></li>
							<li><a href="">Team Games<span>17</span></a></li>
							<li><a href="">Community<span>15</span></a></li>
							<li><a href="">Uncategorized<span>22</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->
