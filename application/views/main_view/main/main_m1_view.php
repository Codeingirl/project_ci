<!-- Hero section -->
<!-- <section class="hero-section">
  <div class="hero-slider owl-carousel">
    <div class="hero-item set-bg" data-setbg="<?php //echo base_url('img/slider/1.jpg'); ?>">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <h2>Enter the Battle</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
            <a href="#" class="site-btn">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-item set-bg" data-setbg="<?php //echo base_url('img/slider/2.jpg'); ?>">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <h2>Enter the Battle</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
            <a href="#" class="site-btn">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- Hero section end -->

<!-- Blog section -->
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
          <a href="#" class="site-btn">Read More</a>
        </div>
      <?php } ?>

        <div class="row">
            <?php foreach ($query as $row) {?>
          <div class="col-md-5">
            <div class="blog-post">
              <img src="<?php echo base_url('img/blog'); ?>/<?php echo $row->blog_img; ?>" alt="">
              <div class="post-date"><?php echo $row->blog_date; ?></div>
              <h4><?php echo $row->blog_name; ?></h4>
              <div class="post-metas">
                <div class="post-meta"><?php echo $row->m_name; ?></div>
                <div class="post-meta">in <a href="#"><?php echo $row->blog_type_name; ?></a></div>
                <div class="post-meta">3 Comments</div>
              </div>
              <a href="#" class="site-btn">Read More</a>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog section end -->

<!-- Blog list section -->
<!-- <section class="blog-list-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="small-blog-list">
          <div class="sb-item">
            <img src="<?php echo base_url('img/blog-thumbs/6.jpg'); ?>" alt="">
            <div class="sb-text">
              <div class="sb-date">April 1,2019</div>
              <h6>10 Amazing new games</h6>
              <div class="sb-metas">
                <div class="sb-meta">By Admin</div>
                <div class="sb-meta">in <a href="#">Games</a></div>
                <div class="sb-meta">3 Comments</div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
            </div>
          </div>
          <div class="sb-item">
            <img src="<?php echo base_url('img/blog-thumbs/7.jpg'); ?>" alt="">
            <div class="sb-text">
              <div class="sb-date">April 1,2019</div>
              <h6>10 Amazing new games</h6>
              <div class="sb-metas">
                <div class="sb-meta">By Admin</div>
                <div class="sb-meta">in <a href="#">Games</a></div>
                <div class="sb-meta">3 Comments</div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
            </div>
          </div>
          <div class="sb-item">
            <img src="<?php echo base_url('img/blog-thumbs/8.jpg'); ?>" alt="">
            <div class="sb-text">
              <div class="sb-date">April 1,2019</div>
              <h6>10 Amazing new games</h6>
              <div class="sb-metas">
                <div class="sb-meta">By Admin</div>
                <div class="sb-meta">in <a href="#">Games</a></div>
                <div class="sb-meta">3 Comments</div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
            </div>
          </div>
          <div class="sb-item">
            <img src="<?php echo base_url('img/blog-thumbs/9.jpg'); ?>" alt="">
            <div class="sb-text">
              <div class="sb-date">April 1,2019</div>
              <h6>10 Amazing new games</h6>
              <div class="sb-metas">
                <div class="sb-meta">By Admin</div>
                <div class="sb-meta">in <a href="#">Games</a></div>
                <div class="sb-meta">3 Comments</div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sb-widget">
          <h2 class="sb-title">Top 5 this week</h2>
          <div class="latest-news-widget top-five">
            <div class="ln-item">
              <div class="ln-index">01</div>
              <img src="<?php echo base_url('img/blog-thumbs/1.jpg'); ?>" alt="">
              <div class="ln-text">
                <div class="ln-date">April 1, 2019</div>
                <h6>10 Amazing new games</h6>
                <div class="ln-metas">
                  <div class="ln-meta">By Admin</div>
                  <div class="ln-meta">in <a href="#">Games</a></div>
                  <div class="ln-meta">3 Comments</div>
                </div>
              </div>
            </div>
            <div class="ln-item">
              <div class="ln-index">02</div>
              <img src="<?php echo base_url('img/blog-thumbs/2.jpg'); ?>" alt="">
              <div class="ln-text">
                <div class="ln-date">April 1, 2019</div>
                <h6>10 Amazing new games</h6>
                <div class="ln-metas">
                  <div class="ln-meta">By Admin</div>
                  <div class="ln-meta">in <a href="#">Games</a></div>
                  <div class="ln-meta">3 Comments</div>
                </div>
              </div>
            </div>
            <div class="ln-item">
              <div class="ln-index">03</div>
              <img src="<?php echo base_url('img/blog-thumbs/3.jpg'); ?>" alt="">
              <div class="ln-text">
                <div class="ln-date">April 1, 2019</div>
                <h6>10 Amazing new games</h6>
                <div class="ln-metas">
                  <div class="ln-meta">By Admin</div>
                  <div class="ln-meta">in <a href="#">Games</a></div>
                  <div class="ln-meta">3 Comments</div>
                </div>
              </div>
            </div>
            <div class="ln-item">
              <div class="ln-index">04</div>
              <img src="<?php echo base_url('img/blog-thumbs/4.jpg'); ?>" alt="">
              <div class="ln-text">
                <div class="ln-date">April 1, 2019</div>
                <h6>10 Amazing new games</h6>
                <div class="ln-metas">
                  <div class="ln-meta">By Admin</div>
                  <div class="ln-meta">in <a href="#">Games</a></div>
                  <div class="ln-meta">3 Comments</div>
                </div>
              </div>
            </div>
            <div class="ln-item">
              <div class="ln-index">05</div>
              <img src="<?php echo base_url('img/blog-thumbs/5.jpg'); ?>" alt="">
              <div class="ln-text">
                <div class="ln-date">April 1, 2019</div>
                <h6>10 Amazing new games</h6>
                <div class="ln-metas">
                  <div class="ln-meta">By Admin</div>
                  <div class="ln-meta">in <a href="#">Games</a></div>
                  <div class="ln-meta">3 Comments</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- Blog list section end -->
