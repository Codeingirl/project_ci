<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
		<div class="col-md-8">
      <br>
      <br><br><br><br>
			<h2>Update data</h2>
			<br>
		  <form action="<?php echo site_url('register/edit_img') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">

				<div class="form-group row">
					<div class="col-sm-2 control-label"> Password </div>
					<div class="col-sm-5">
						<input type="password" name="m_password" class="form-control" required placeholder="Password" value=""></div>
				</div>

        <div class="form-group row">
					<div class="col-sm-2 control-label"> </div>
					<div class="col-sm-5">
						<input type="password" name="m_confirmpassword" class="form-control" required placeholder="Confirm Password"></div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2 control-label"></div>
					<div class="col-sm-5">
            <input type="hidden" name="m_id" value="<?php echo $_SESSION['m_id'] ?>">
						<button type="submit"  class="btn btn-primary"> update	</button>
				</div>
		  </div>
		  </form>
		</div>
  </div>
</div>
