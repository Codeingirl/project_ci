
<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="overview-wrap">
                  <h2 class="title-1">overview</h2>
                  <button class="au-btn au-btn-icon au-btn--blue">
              </div>
          </div>
      </div>
      <div class="row m-t-25">
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>10368</h2>
                            <span>members online</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c4">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-money"></i>
                        </div>
                        <div class="text">
                            <h2>$1,060,386</h2>
                            <span>total earnings</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart4"></canvas>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="row">
          <div class="col-md-12">
              <!-- DATA TABLE -->
              <h3 class="title-5 m-b-30 ">Member table</h3>
              <div class="table-data__tool">
              </div>
              <div class="table-responsive table-responsive-data2">
                  <table class="table table-borderless table-data3">
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>user</th>
                            <th>password</th>
                            <th>name</th>
                            <th>Lastname</th>
                            <th>email</th>
                            <th>tel</th>
                            <th>type</th>
                            <th>time save</th>
                            <th></th>
                          </tr>
                      </thead>
                      <tbody> <?php foreach ($query as $row){?>
                          <tr class="tr-shadow">
                              <td><?php echo $row->m_id; ?></td>
                              <td><?php echo $row->m_user; ?></td>
                              <td><?php echo $row->m_password; ?></td>
                              <td><?php echo $row->m_name; ?></td>
                              <td><?php echo $row->m_lname; ?></td>
                              <td><span class="block-email"><?php echo $row->m_email; ?></span></td>
                              <td><?php echo $row->m_tel; ?></td>
                              <td><span class="status--process"><?php echo $row->m_type; ?></span></td>
                              <td><?php echo $row->datesave; ?></td>
                              <td>
                                  <div class="table-data-feature">
                                      <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                          <a href="<?php echo site_url('admin/edit_admin/').$row->m_id; ?>"><i class="zmdi zmdi-edit"></i>
                                      </button></a>
                                      <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                          <a href="<?php echo site_url('admin/delete/').$row->m_id; ?>" onclick="return confirm('confirm to delete');"><i class="zmdi zmdi-delete"></i>
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
