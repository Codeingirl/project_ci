
<section class="blog-section spad">
  <div class="container">
    <h1 style="color: #fff;"> Comment </h1>
    <br><br>
    <div class="col-md-10">
      <?php foreach ($query as $row) {?>
      <div class="card" style="background: #222222;">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p><?php echo $row->comment_details; ?></p>
            <footer class="blockquote-footer">
              <?php echo $row->comment_name;?> in <?php echo $row->comment_date; ?>

            </footer>
          </blockquote>
        </div>
      </div>
      <?php } ?>
      <form action="<?php echo site_url('Mainpage/comment_add'); ?>" method="post">
        <textarea id="comment_details" name="comment_details" rows="9"  class="form-control" ></textarea>
        <script>
                ClassicEditor
                        .create( document.querySelector( '#comment_details' ) )
                        .then( editor => {
                                console.log( editor );
                        } )
                        .catch( error => {
                                console.error( error );
                        } );
        </script>
        <input id="Comment_userID" name="m_id" type="text" class="form-control" value="<?php echo ($_SESSION['m_id']); ?>" hidden>
        <input id="Comment_userNAME" name="comment_name" type="text" class="form-control" value="<?php echo ($_SESSION['m_name']); ?>" hidden>
        <input id="Comment_blogID" name="blog_id" type="text" class="form-control" value="<?php echo $row->blog_id; ?>" hidden>
        <br><br>
        <div align="right">
          <!-- <input type="hidden" name="blog_id" value="<?php //echo $rowedit->blog_id;?>"> -->
          <button type="submit" class="site-btn"><i class="fa fa-save">&nbsp;</i>บันทึก</button>

          <!-- <a href="<?php //echo site_url('adminblog'); ?>">
            <button type="button" class="btn btn-outline-danger"><i class="fa fa-times-circle">&nbsp;</i> ยกเลิก</button>
          </a> -->
      </div>
      </form>
    </div>
  </div>
</section>
