<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
		<div class="col-md-8">
			<h2>Sign In</h2>
			<br>
		  <form action="<?php echo site_url('register/adding') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
		  <div class="form-group row">
				<div class="col-sm-2 control-label"> Username </div>
				<div class="col-sm-5">
					<input type="text" name="m_user" class="form-control" required placeholder="Usename"></div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2 control-label"> Password </div>
					<div class="col-sm-5">
						<input type="password" name="m_password" class="form-control" required placeholder="Password"></div>
				</div>

        <div class="form-group row">
					<div class="col-sm-2 control-label"> </div>
					<div class="col-sm-5">
						<input type="password" name="m_confirmpassword" class="form-control" required placeholder="Confirm Password"></div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2 control-label"> Name </div>
					<div class="col-sm-5">
						<input type="text" name="m_name" class="form-control" required placeholder="Name"></div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2 control-label"> Last Name </div>
					<div class="col-sm-5">
						<input type="text" name="m_lname" class="form-control" required placeholder="Last Name"></div>
				</div>

        <div class="form-group row">
					<div class="col-sm-2 control-label"> pic </div>
					<div class="col-sm-5">
						<input type="file" name="m_img" class="form-control" accept="img/*"></div>
				</div>


				<div class="form-group row">
					<div class="col-sm-2 control-label"> Email </div>
					<div class="col-sm-5">
						<input type="text" name="m_email" class="form-control" required placeholder="xxxxx@xxx.xx"></div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2 control-label"> Tel </div>
					<div class="col-sm-5">
						<input type="text" name="m_tel" class="form-control" required placeholder="012-345-6789"></div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2 control-label"></div>
					<div class="col-sm-5">
						<button type="submit"  class="btn btn-primary"> Sign In	</button>
				</div>
		  </div>
		  </form>
		</div>
  </div>
</div>
