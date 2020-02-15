
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
          <!-- <i class="site-btn"></i> -->
          <a href="" class="site-btn" data-toggle="modal" data-target="#modalLoginForm">Log in</a>

    </div>
    </div>
  </div>
</section>
<form action="<?php echo site_url('register/checklogin2') ?>" method="post">
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header text-center">
         <h4 class="modal-title w-100 font-weight-bold">Login</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body mx-3">
         <div class="md-form mb-5">
           <i class="fas fa-envelope prefix grey-text"></i>
           <input type="email" id="defaultForm-email" name="m_email" class="form-control validate">
           <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
         </div>

         <div class="md-form mb-4">
           <i class="fas fa-lock prefix grey-text"></i>
           <input type="password" id="defaultForm-pass" name="m_password"class="form-control validate">
           <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
         </div>

       </div>
       <div class="modal-footer d-flex justify-content-center">
         <button class="btn btn-default">Login</button>
       </form>
