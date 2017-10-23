
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
           <i class="fa fa-fw fa-users"></i> Lista me të gjithë përdoruesit</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Edit</th>
				  <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Edit</th>
				  <th>Delete</th>
                </tr>
              </tfoot>
              <tbody>
				<?php
				$users=findUsers();
				while($user=mysqli_fetch_array($users)){
				$user_id=$user['user_id'];
				echo "<tr>";
				echo "<td>".  $user['firstname'] . "</td>";
				echo "<td>".  $user['lastname'] . "</td>";
				echo "<td>".  $user['email'] . "</td>";
				echo "<td>".  $user['phone'] . "</td>";
				echo "<td>".  $user['username'] . "</td>";
				echo "<td><a href='users.php?source=edit_user&user_id=$user_id'>Edit</a></td>";
				echo "<td><a href='users.php?delete=$user_id'>Delete</a></td>";
				echo "</tr>";
				}
			  ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      