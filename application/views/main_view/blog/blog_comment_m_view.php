
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
              <?php echo $row->comment_name;?>
              in <?php echo $row->comment_date; ?>
            </footer>
          </blockquote>
        </div>
      </div>
      <?php } ?>
      <form action="<?php echo site_url('Admin/blog_update'); ?>" method="post">
        <textarea id="blog_details" name="blog_details" rows="9"  class="form-control" ></textarea>
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
        <br><br>

      </form>
      <div align="right">
        <!-- <input type="hidden" name="blog_id" value="<?php //echo $rowedit->blog_id;?>"> -->
        <button type="button" class="btn btn-outline-success">
          <i class="fa fa-save site-btn">&nbsp;</i>
          <a href="" data-toggle="modal" data-target="#modalLoginForm">Log in</a>
          </button>
    </div>
    </div>
  </div>
</section>
