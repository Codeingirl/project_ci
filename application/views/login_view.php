<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
		<div class="col-md-8">
			<h2>LOG IN</h2>
			<br>
		  <form action="<?php echo site_url('register/checklogin2') ?>" method="post" class="form-horizontal">
		  <div class="form-group row">
				<div class="col-sm-2 control-label"> Email </div>
				<div class="col-sm-5">
					<input type="text" name="m_email" class="form-control" required placeholder="please Enter your Email"></div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2 control-label"> Password </div>
					<div class="col-sm-5">
						<input type="password" name="m_password" class="form-control" required placeholder="Password"></div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2 control-label"></div>
					<div class="col-sm-5">
						<button type="submit"  class="btn btn-primary" name="login"> Log In	</button>
				</div>
		  </div>
		  </form>
		</div>
  </div>
</div>
