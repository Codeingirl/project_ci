<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
		<div class="col-md-8">
      <br>
      <br><br><br><br>
			<h2>Update type</h2>
			<br>
		  <form action="<?php echo site_url('register/edit_type') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">

		  <div class="form-group row">
				<div class="col-sm-2 control-label"><?php echo $rowedit->m_name;?> </div>
				<div class="col-sm-5">
          <select name="m_type" id="select" class="form-control" required>
            <option >กรุณาเลือกตำแหน่งสิทธิ์การใช้งาน</option>
            <option value="1">Web Admin</option>
            <option value="0">General Member</option>
          </select>
				</div>


				<div class="form-group row">
					<div class="col-sm-2 control-label"></div>
					<div class="col-sm-5">
            <input type="hidden" name="m_id" value="<?php echo $rowedit->m_id;?> ">
						<button type="submit"  class="btn btn-primary"> update	</button>
				</div>
		  </div>
		  </form>
		</div>
  </div>
</div>
