<!-- Jquery JS-->
<script src="<?php echo base_url('css/admin_css/vendor/jquery-3.2.1.min.js');?>"></script>
<!-- Bootstrap JS-->
<script src="<?php echo base_url('css/admin_css/vendor/bootstrap-4.1/popper.min.js');?>"></script>
<script src="<?php echo base_url('css/admin_css/vendor/bootstrap-4.1/bootstrap.min.js');?>"></script>
<!-- Vendor JS       -->
<script src="<?php echo base_url('css/admin_css/vendor/slick/slick.min.js');?>">
</script>
<script src="<?php echo base_url('css/admin_css/vendor/wow/wow.min.js');?>"></script>
<script src="<?php echo base_url('css/admin_css/vendor/animsition/animsition.min.js');?>"></script>
<script src="<?php echo base_url('css/admin_css/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js');?>">
</script>
<script src="<?php echo base_url('css/admin_css/vendor/counter-up/jquery.waypoints.min.js');?>"></script>
<script src="<?php echo base_url('css/admin_css/vendor/counter-up/jquery.counterup.min.js');?>">
</script>
<script src="<?php echo base_url('css/admin_css/vendor/circle-progress/circle-progress.min.js');?>"></script>
<script src="<?php echo base_url('css/admin_css/vendor/perfect-scrollbar/perfect-scrollbar.js');?>"></script>
<script src="<?php echo base_url('css/admin_css/vendor/chartjs/Chart.bundle.min.js');?>"></script>
<script src="<?php echo base_url('css/admin_css/vendor/select2/select2.min.js');?>">
</script>

<!-- Main JS-->
<script src="<?php echo base_url('css/admin_css/js/main.js');?>"></script>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

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
<!-- MDB core JavaScript -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script> -->
</body>

</html>
<!-- end document-->
