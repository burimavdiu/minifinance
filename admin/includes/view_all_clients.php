  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
     <i class="fa fa-fw fa-users"></i>Lista me të gjithë klientët</div>
    <div class="card-body" style ="overflow: scroll;">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Klienti</th>
              <th>Përsoni kontaktues</th>
              <th>Pozita(Titulli)</th>
              <th>Adresa</th>
              <th>Qyteti</th>
              <th>Shteti</th>
              <th>Telofoni i punës</th>
              <th>Telofoni mobil</th>
              <th>Email</th>
              <th>Web Faqja</th>
              <th>Nr. Regjistrimit të Klientit</th>
              <th>Nr. Fiskal</th>
              <th>Nr. TVSH</th>
              <th>Lloji i klientit</th>
              <th>Regjistroi</th>
              <th>Koha e regjistrimit</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Klienti</th>
              <th>Përsoni kontaktues</th>
              <th>Pozita(Titulli)</th>
              <th>Adresa</th>
              <th>Qyteti</th>
              <th>Shteti</th>
              <th>Telofoni i punës</th>
              <th>Telofoni mobil</th>
              <th>Email</th>
              <th>Web Faqja</th>
              <th>Nr. Regjistrimit të Klientit</th>
              <th>Nr. Fiskal</th>
              <th>Nr. TVSH</th>
              <th>Lloji i klientit</th>
              <th>Regjistroi</th>
              <th>Koha e regjistrimit</th>
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
                echo "<td>".  $client['client'] . "</td>";
                echo "<td>".  $client['contact_person'] . "</td>";
                echo "<td>".  $client['job_position'] . "</td>";
                echo "<td>".  $client['address_1'] . "</td>";
                echo "<td>".  $client['city'] . "</td>";
                echo "<td>".  $client['state'] . "</td>";
                echo "<td>".  $client['mobile_no'] . "</td>";
                echo "<td>".  $client['tel_no'] . "</td>";
                echo "<td>".  $client['client_email'] . "</td>";
                echo "<td>".  $client['client_web'] . "</td>";
                echo "<td>".  $client['business_register_no'] . "</td>";
                echo "<td>".  $client['fiscal_no'] . "</td>";
                echo "<td>".  $client['vat_no'] . "</td>";
                echo "<td>".  $client['client_type'] . "</td>";
                echo "<td>".  $client['user_id'] . "</td>";
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
