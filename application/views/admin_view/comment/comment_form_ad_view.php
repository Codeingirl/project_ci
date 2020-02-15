<br><br>
<div class="container">


<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <br><br><br>
        <h3 class="title-5 m-b-35">Comment Manager</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md" hidden>
                    <select class="js-select2" name="property">
                        <option selected="selected">All Properties</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <div class="rs-select2--light rs-select2--sm" hidden>
                    <select class="js-select2" name="time">
                        <option selected="selected">Today</option>
                        <option value="">3 Days</option>
                        <option value="">1 Week</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
        </div>



              <?php foreach ($query2 as $row2) {?>
              <img class="card-img-top" src="<?php echo base_url('img/blog/'); ?>/<?php echo $row2->blog_img; ?>" alt="Card image cap" style="width: 25%;">
              <div class="card-block">
                <br>
                <h4 class="card-title"><?php echo $row2->blog_name; ?></h4>
              </div>
            <?php } ?>


        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>ข้อความคอมเม้นท์</th>
                        <th>ผู้โพส</th>
                        <th>เวลา</th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach ($query as $row) {?>

                    <tr class="spacer"></tr>
                    <tr class="tr-shadow">
                        <td>
                          <?php echo $row->comment_details; ?>
                        </td>
                        <td class="desc">
                          <?php echo $row->comment_name; ?>
                        </td>
                        <td>
                         <?php echo $row->comment_date; ?>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <a href="<?php echo site_url('Admin/comment_delete/').$row->comment_id; ?>"><i class="zmdi zmdi-edit"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                      <a href="#"></a>
                    <?php } ;?>

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
</div>
