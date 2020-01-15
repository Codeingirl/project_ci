<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
		<div class="col-md-8">
			<h2>Sign In</h2>
			<br>
		  <form action="<?php echo site_url('Insertdata/adding') ?>" method="post" class="form-horizontal">
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
					<div class="col-sm-2 control-label"></div>
					<div class="col-sm-5">
						<button type="submit"  class="btn btn-primary"> Sign In	</button>
				</div>
		  </div>
		  </form>
		</div>
  </div>
</div>
