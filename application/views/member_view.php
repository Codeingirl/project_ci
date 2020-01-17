<div class="container">
  <div class="row">
		<div class="col-md-9">
			<h2>Manage Member</h2>
			<br>
        <table class="table table-bordered  table-table-hover table-dark">
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
              <th>time</th>
              <th>update</th>
              <th>delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($query as $row){?>

            <tr>
              <td><?php echo $row->m_id; ?></td>
              <td><?php echo $row->m_user; ?></td>
              <td><?php echo $row->m_password; ?></td>
              <td><?php echo $row->m_name; ?></td>
              <td><?php echo $row->m_lname; ?></td>
              <td><?php echo $row->m_email; ?></td>
              <td><?php echo $row->m_tel; ?></td>
              <td><?php echo $row->m_type; ?></td>
              <td><?php echo $row->datesave; ?></td>
              <td><a href="<?php echo site_url('member/edit/').$row->m_id; ?>">Edit</a></td>
              <td><a href="<?php echo site_url('member/delete/').$row->m_id; ?>" onclick="return confirm('confirm to delete');">Delete</a></td>
            </tr>
          <?php } ;?>
          </tbody>
        </table>
		</div>
  </div>
</div>
