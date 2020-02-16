<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-post single-post">
            <br><br>
						<h3>Sign in</h3>
						<div class="comments">
              <form  action="<?php echo site_url('Mainpage/addblog') ?>" method="post" enctype="multipart/form-data" class="comment-form">
              <div class="col-md-12">
                <div class="form-group">
                    <label for="blog_name" class="control-label mb-1">ชื่อบทความ</label>
                    <input id="blog_name" name="blog_name" type="text" class="form-control" value="">
                </div>
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="select" class=" form-control-label">หมวดหมู่บทความ</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <select name="blog_type" id="select" class="form-control" value="" required>
                            <option >กรุณาเลือก</option>
                            <option value="101">Game News</option>
                            <option value="102">Tech</option>
                            <option value="103">Esport</option>
                        </select>
                    </div>
                    <input id="blog_userID" name="m_id" type="text" class="form-control" value="<?php echo ($_SESSION['m_id']); ?>" hidden>
                </div>
                  <div class="form-group">
                  <label for="exampleFormControlFile1">อัพโหลดรูปภาพ</label>
                  <input type="file" class="form-control-file btn btn-outline-light text-dark" id="blog_img" name="blog_img" accept="img/*">
                  </div>
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label" >รายละเอียดบทความ</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="blog_details" name="blog_details" rows="9"  class="form-control" ></textarea>
                                </div>
                                <script>
                                        ClassicEditor
                                                .create( document.querySelector( '#blog_details' ) )
                                                .then( editor => {
                                                        console.log( editor );
                                                } )
                                                .catch( error => {
                                                        console.error( error );
                                                } );
                                </script>


                        </div>
                        <div align="center">
                          <button type="submit" class="btn btn-outline-success"><i class="fa fa-plus-circle">&nbsp;</i> เพิ่มบทความ</button>

                          <!-- <a href="<?php echo site_url('adminblog'); ?>">
                            <button type="button" class="btn btn-outline-danger"><i class="fa fa-times-circle">&nbsp;</i> ยกเลิก</button>
                          </a> -->
                      </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->
