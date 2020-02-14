<br><br>
<section class="blog-section spad">
  <div class="container">
    <div class="row">
      <?php foreach ($query as $row) {?>
      <div class="col-lg-12 blog-posts">
        <div class="blog-post featured-post">
          <img src="<?php echo base_url('img/blog'); ?>/<?php echo $row->blog_img; ?>"  width="50px"alt="">
          <div class="post-date"><?php echo $row->blog_date; ?></div>
          <h3 font color="white"><?php echo $row->blog_name; ?></h3>
          <div class="post-metas">
            <div class="post-meta"><?php echo $row->m_name; ?></div>
            <div class="post-meta">in <a href="#"><?php echo $row->blog_type_name; ?></a></div>
            <div class="post-meta">3 Comments</div>
          </div>
          <div class="post-meta" style="color: #fff;"><?php echo $row->blog_details; ?></div>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
</section>
