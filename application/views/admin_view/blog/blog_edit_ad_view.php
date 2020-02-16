<div class="section__content section__content--p30">
  <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-shopping-cart"></i>  แก้ไขข้อมูลบทความ</div>
                    <div class="card-body">

                        <form action="<?php echo site_url('Admin/blog_update'); ?>" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                             <label for="blog_name" class="control-label mb-1">ชื่อบทความ</label>
                             <input id="blog_name" name="blog_name" type="text" class="form-control" value="<?php echo $rowedit->blog_name;?>">
                         </div>
                         <div class="row form-group">
                             <div class="col col-md-12">
                                 <label for="select" class=" form-control-label">หมวดหมู่บทความ</label>
                             </div>
                             <div class="col-12 col-md-12">
                                 <select name="blog_type" id="select" class="form-control" value="<?php echo $rowedit->blog_type;?>" required>
                                   <option >กรุณาเลือก</option>
                                   <option value="101">Game News</option>
                                   <option value="102">Tech</option>
                                   <option value="103">Esport</option>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group">
                           <label for="exampleFormControlFile1">อัพโหลดรูปภาพ</label>
                           <input type="file" class="form-control-file btn btn-outline-light text-dark" id="blog_img" name="blog_img" accept="img/*" >
                         </div>
                         <div class="col-lg-12">
                             <div class="card">
                                 <div class="card-header">
                                     <div class="row form-group">
                                         <div class="col col-md-3">
                                             <label for="textarea-input" class=" form-control-label" >รายละเอียดบทความ</label>
                                         </div>
                                         <div class="col-12 col-md-9">
                                             <textarea id="blog_details" name="blog_details" rows="9"  class="form-control"  value=""><?php echo $rowedit->blog_details;?></textarea>
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
                               </div>
                             </div>
                         </div>
                         <div align="center">
                           <input type="hidden" name="blog_id" value="<?php echo $rowedit->blog_id;?>">
                           <button type="submit" class="btn btn-outline-success"><i class="fa fa-save">&nbsp;</i>บันทึก</button>

                           <!-- <a href="<?php //echo site_url('adminblog'); ?>">
                             <button type="button" class="btn btn-outline-danger"><i class="fa fa-times-circle">&nbsp;</i> ยกเลิก</button>
                           </a> -->
                       </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
