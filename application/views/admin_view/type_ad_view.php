
<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="overview-wrap">
                  <h2 class="title-1">Member Type</h2>
                  <button class="au-btn au-btn-icon au-btn--blue">
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <!-- DATA TABLE -->
              <div class="table-data__tool">
              </div>
              <div class="table-responsive table-responsive-data2">
                  <table class="table table-borderless table-data3">
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>Profile</th>
                            <th>user info</th>
                            <!-- <th>password</th> -->
                            <th>type</th>
                            <th>time save</th>
                            <th></th>
                          </tr>
                      </thead>
                      <tbody> <?php foreach ($query as $row){?>
                          <tr class="tr-shadow">
                              <td><?php echo $row->m_id; ?></td>
                              <td>
                                <img src="<?php echo base_url('img/profile'); ?>/<?php echo $row->m_img; ?>" width="100px">
                              </td>
                              <td>
                                <span class="status--process">Username: </span><?php echo $row->m_user; ?><br>
                              </td>
                              <td><span class="status--process"><?php echo $row->m_typename; ?></span></td>
                              <td><?php echo $row->datesave; ?></td>
                              <td>
                                  <div class="table-data-feature">
                                      <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                          <a href="<?php echo site_url('admin/edit_type/').$row->m_id; ?>"><i class="zmdi zmdi-edit"></i>
                                      </button></a>
                                  </div>
                              </td>
                          </tr><?php } ;?>
                          <tr class="spacer"></tr>
                      </tbody>
                  </table>
              </div>
              <!-- END DATA TABLE -->
          </div>
      </div>
    </div>
  </div>
</div>
