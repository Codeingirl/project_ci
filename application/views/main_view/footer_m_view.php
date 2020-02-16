<!-- Footer section -->
<div class="footer-section" style="background: #222222;">
  <div class="container">
    <div class="row" style="margin-right: 50px;">
      <div class="col-lg-5">
        <div class="footer-widget">
          <div class="abo5t-widget">
            <img src="<?php echo base_url('img/Gaming mate.png');?>" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <br>
    <div class="copyright"><a href=""><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
</div>
<div class="social-links-warp" style="margin-left: 20px;">
  <div class="container">
    <div class="social-links">
      <a href="#"><i class=""></i><span></span></a>
      <a href="#"><i class=""></i><span></span></a>
      <a href="#"><i class=""></i><span>facebook</span></a>
      <a href="#"><i class=""></i><span>twitter</span></a>
      <a href="#"><i class=""></i><span>youtube</span></a>
      <a href="#"><i class=""></i><span></span></a>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
  <?php if($this->session->flashdata('register_success')):?>
  swal ("ดำเนินการสำเร็จ","","success")
  <?php endif; ?>
</script>

<script type="text/javascript">
  <?php if($this->session->flashdata('register_fail')):?>
  swal ("ดำเนินการไม่สำเร็จ","กรุณาลองใหม่","error")
  <?php endif; ?>
</script>

<script type="text/javascript">
  <?php if($this->session->flashdata('register_img_error')):?>
  swal ("ไม่มีรูปภาพ","กรุณาใส่รูปภาพ","error")
  <?php endif; ?>
</script>

<script type="text/javascript">
  <?php if($this->session->flashdata('register_email_fail')):?>
  swal ("emailซ้ำ","กรุณาเปลี่ยนใหม่","error")
  <?php endif; ?>
</script>

<script type="text/javascript">
  <?php if($this->session->flashdata('register_pass_error')):?>
  swal ("passwordไม่ตรงกัน","กรุณาแก้ไข่","error")
  <?php endif; ?>
</script>
