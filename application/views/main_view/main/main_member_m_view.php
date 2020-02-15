
<!-- Blog section -->
<br><br>
<section class="blog-section spad">
  <div class="container">
    <div class="row">
        <div class="row">
            <?php foreach ($query as $row) {?>
          <div class="col-md-6">
            <div class="blog-post">
              <img src="<?php echo base_url('img/blog'); ?>/<?php echo $row->blog_img; ?>" alt="">
              <div class="post-date"><?php echo $row->blog_date; ?></div>
              <h4><?php echo $row->blog_name; ?></h4>
              <div class="post-metas">
                <div class="post-meta"><?php echo $row->m_name; ?></div>
                <div class="post-meta">in <a href="#"><?php echo $row->blog_type_name; ?></a></div>
                <div class="post-meta">3 Comments</div>
              </div>
              <a href="<?php echo site_url('Mainpage/blog_details') ?>/<?php echo $row->blog_id; ?>" class="site-btn">Read More</a>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
