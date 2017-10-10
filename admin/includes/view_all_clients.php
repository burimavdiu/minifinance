  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Data Table Example</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Contact Person</th>
              <th>Job Position</th>
              <th>Address</th>
              <th>City</th>
              <th>State</th>
              <th>Zip</th>
              <th>Mobile no.</th>
              <th>Tel no.</th>
              <th>Client email</th>
              <th>Client web</th>
              <th>Business register no.</th>
              <th>Fiscal no.</th>
              <th>Vat no.</th>
              <th>Client type</th>
              <th>User id</th>
              <th>Registration date</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Contact Person</th>
              <th>Job Position</th>
              <th>City</th>
              <th>State</th>
              <th>Zip</th>
              <th>Mobile no.</th>
              <th>Tel no.</th>
              <th>Client email</th>
              <th>Client web</th>
              <th>Business register no.</th>
              <th>Fiscal no.</th>
              <th>Vat no.</th>
              <th>Client type</th>
              <th>User id</th>
              <th>Registration date</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </tfoot>
          <tbody>
          <?php
            $clients=findClients();
            while($client=mysqli_fetch_array($clients)){
                $client_id=$client['client_id'];
                echo "<tr>";
                echo "<td>".  $client['contact_person'] . "</td>";
                echo "<td>".  $client['job_position'] . "</td>";
                echo "<td>".  $client['address'] . "</td>";
                echo "<td>".  $client['city'] . "</td>";
                echo "<td>".  $client['state'] . "</td>";
                echo "<td>".  $client['zip'] . "</td>";
                echo "<td>".  $client['mobile_no'] . "</td>";
                echo "<td>".  $client['tel_no'] . "</td>";
                echo "<td>".  $client['client_email'] . "</td>";
                echo "<td>".  $client['client_web'] . "</td>";
                echo "<td>".  $client['business_register_no'] . "</td>";
                echo "<td>".  $client['fiscal_no'] . "</td>";
                echo "<td>".  $client['vat_no'] . "</td>";
                echo "<td>".  $client['client_type'] . "</td>";
                echo "<td>".  $client['client_id'] . "</td>";
                echo "<td>".  $client['registration_date'] . "</td>";
                echo "<td><a href='clients.php?source=edit_client&client_id=$client_id'>Edit</a></td>";
                echo "<td><a href='clients.php?delete=$client_id'>Delete</a></td>";
                echo "</tr>";
            }
          ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
