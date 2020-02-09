<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
		<div class="col-md-8">
      <br>
      <br><br><br><br>
			<h2>Update data</h2>
			<br>
		  <form action="<?php echo site_url('register/edit_data') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">

		  <div class="form-group row">
				<div class="col-sm-2 control-label"> Username </div>
				<div class="col-sm-5">
					<input type="text" name="m_user" class="form-control" required placeholder="Usename" value="<?php echo $rowedit->m_user; ?>"></div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2 control-label"> Name </div>
					<div class="col-sm-5">
						<input type="text" name="m_name" class="form-control" required placeholder="Name" value="<?php echo $rowedit->m_name; ?>"></div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2 control-label"> Last Name </div>
					<div class="col-sm-5">
						<input type="text" name="m_lname" class="form-control" required placeholder="Last Name" value="<?php echo $rowedit->m_lname; ?>"></div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2 control-label"> Tel </div>
					<div class="col-sm-5">
						<input type="text" name="m_tel" class="form-control" required placeholder="012-345-6789" value="<?php echo $rowedit->m_tel; ?>"></div>
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
