
<?php
	if(isset($_POST['addClient'])){
		$mesazhi=addClient($_POST['client'],$_POST['contactPerson'],$_POST['position'],
		$_POST['firstAddress'],$_POST['secondAddress'],$_POST['city'],
		$_POST['state'],$_POST['zip'],$_POST['phone'],$_POST['mobPhone'],
		$_POST['email'],$_POST['web'],$_POST['clientRegistrationNo'],
		$_POST['fiscalNo'],$_POST['vatNo'],$_POST['clientType'],8,
		$_POST['date']);// vlera 1 e duhet te zevendesohet me id-ne e adminit
		echo "<p class='text-success'>".$mesazhi."</p>";
	}
?>


<div class="card  mx-auto mt-30">
		<div class="card-header h4">Shto / Ndrysho shitje</div>
	<div class="card-body">
		<form method="post">	
			<h5 class="alert alert-info">Të dhënat për shitjen:</h5>
			<hr> 
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-4 ">
					<div class="col-md-12">
						<label class="h6" for="nobill">Numri i faturës:</label>
						<input name="nobill" class="form-control" id="nobill" type="text" aria-describedby="positionHelp">
					</div>
					</div>
					<div class="col-md-4">
					<div class="col-md-12">
						<label class="h6" for="dateofbill">Data e faturës:</label>
						<input name="dateofbill" class="form-control" id="dateofbill" type="date" aria-describedby="positionHelp">
					</div>
					</div>
					<div class="col-md-4">
					<div class="col-md-12">	
						<label class="h6" for="client">Klienti:</label>
						<select name="client" class="form-control"  id="client">
							<option>Klient1</option>
							<option>Klient2</option>
							<option>Klient3</option>
						</select>
					</div>
					</div>
				</div>
			</div>
				<div class="form-group">
					<div class="form-row">
						<div class="col-md-4 ">
						<div class="col-md-12">
							<label class="h6" for="description">Përshkrimi:</label>
							<input name="description" class="form-control" id="description" type="text" aria-describedby="firstAddressHelp">
						</div>
						</div>
						<div class="col-md-4 ">
						<div class="col-md-12">
							<label class="h6" for="typeofbill">Lloji i faturës:</label>
							<select name="typeofbill" class="form-control"  id="typeofbill">
								<option>Faturë</option>
								<option>Faturë</option>
								<option>Faturë</option>
							</select>
						</div>
						</div>
						<div class="col-md-4 ">
						<div class="col-md-12">
							<label class="h6" for="department">Departamenti :</label>
							<?php
								echo '<select name="departments" class="form-control"  id="department">';
								$departments=findDepartments();
								
								while($dep=mysqli_fetch_array($departments)){
									echo "<option value='".$dep['dep_id']."'> ".$dep['dep_name']. "</option>";
								}
								echo '</select>';
							?>
						</div>
						</div>	
					</div>
				</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-4">
					<div class="col-md-12">
						<label class="h6" for="status">Statusi:</label>
						<select name="status" class="form-control"  id="status">
							<option>Klient1</option>
							<option>Klient2</option>
							<option>Klient3</option>
						</select>
					</div>
					</div>
					<div class="col-md-4">
					<div class="col-md-12">
						<label class="h6" for="dateofpay">Data e pagesës:</label>
						<input name="dateofpay" class="form-control" id="dateofpay" type="date" aria-describedby="positionHelp">
					</div>
					</div>
					<div class="col-md-4">
					<div class="col-md-12">
						<label class="h6" for="referenc">Referenca:</label>
						<input name="referenc" class="form-control" id="referenc" type="text" aria-describedby="positionHelp">  
					</div>
					</div>
				</div>
			</div>
				
				<!-- pjesa kush e regjistroj dhe data  duhet te behet automatike.
				<div class="form-group">
					<div class="form-row">
						<div class="col-md-6">
							<label  class="h6" for="registrar">Regjistroi:</label>
							<input name="registrar" class="form-control" id="registrar" type="text">
						 </div>
			  
						<div class="col-md-6">
							<label class="h6" for="date">Koha e regjistrimit:</label>
							<input name="date" class="form-control" id="date" type="date">
						</div>
					</div>
				</div>
				-->
			<hr>
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<input name="searchbill" type="submit" class="btn btn-primary btn-default btn-block" value="Regjistro">
							</div>
						</div>
						</div>
					<div class="col-md-6">
						<div class="row mt-3 mt-md-0">
							<div class="col-md-12">
							<input name="reset" type="reset" class="btn btn-outline-secondary btn-default btn-block"  value="Fshij">
							</div>
						</div>
					</div>
					</div>
				</div>
			
			<!--
			<div class="d-flex justify-content-center "> lloj i butonit ne mes
			<input name="searchbill" type="submit" class="btn btn-primary  btn-lg w-50 p-2" value="Shto" >
			</div>
			</div>
			-->
		</form>
			
	</div>
</div>
<hr>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Detajet e shitjes (Artikujt)</div>
    <div class="card-body" style ="overflow: scroll;">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Shërbimi</th>
              <th>Përshkrimi i shërbimit</th>
              <th>Njësia</th>
              <th>Sasia</th>
              <th>TVSH(18%)</th>
              <th>Çmimi njësi</th>
              <th>Çmimi njësi pa TVSH</th>
              <th>Vlera pa TVSH</th>
              <th>Vlera e TVSH-së</th>
              <th>Çmimi total</th>
			  <th>Data</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Shërbimi</th>
              <th>Përshkrimi i shërbimit</th>
              <th>Njësia</th>
              <th>Sasia</th>
              <th>TVSH(18%)</th>
              <th>Çmimi njësi</th>
              <th>Çmimi njësi pa TVSH</th>
              <th>Vlera pa TVSH</th>
              <th>Vlera e TVSH-së</th>
              <th>Çmimi total</th>
			  <th>Data</th>
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
                echo "<td>".  $client['address_2'] . "</td>";
                echo "<td>".  $client['city'] . "</td>";
                echo "<td>".  $client['state'] . "</td>";
                echo "<td>".  $client['zip'] . "</td>";
                echo "<td>".  $client['mobile_no'] . "</td>";
				echo "<td>".  $client['zip'] . "</td>";
                echo "<td>".  $client['mobile_no'] . "</td>";
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



