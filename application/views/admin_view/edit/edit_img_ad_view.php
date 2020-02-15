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
  				<div class="col-sm-2 control-label"> Profile </div>
  				<div class="col-sm-5">
  					<input type="file" name="m_img" class="form-control" required accept="img/*"></div>
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
