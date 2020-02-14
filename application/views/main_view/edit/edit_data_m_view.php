<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-post single-post">
            <br><br>
						<h3>Updte Information</h3>
						<div class="comments">
              <form  action="<?php echo site_url('register/m_edit_data') ?>" method="post" enctype="multipart/form-data" class="comment-form">
              <div class="col-md-8">
            				<div class="col-md-10">
            					<input type="text" name="m_user"  required placeholder="Usename" value="<?php echo $rowedit->m_user; ?>"></div>

                    <div class="col-md-10">
                        <input type="text" name="m_name"  required placeholder="Name" value="<?php echo $rowedit->m_name; ?>"></div>

            				<div class="col-md-10">
            						<input type="text" name="m_lname"  required placeholder="Last Name" value="<?php echo $rowedit->m_lname; ?>" ></div>

										<div class="col-md-10">
	            					<input type="text" name="m_tel"  required placeholder="Your tel" value="<?php echo $rowedit->m_tel; ?>"></div>

                        <div class="col-md-12">
													<input type="hidden" name="m_id" value="<?php echo $_SESSION['m_id'] ?>">
      										<button  type="submit" class="site-btn">Update</button>
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
