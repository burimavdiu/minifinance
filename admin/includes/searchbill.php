
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
	<div class="card-header h4">Kërko raportin e faturave</div>
	<div class="card-body">
	<form method="post">	
		<h5 class="alert alert-info">Të dhënat për faturen:</h5>
		<hr> 
	<div class="form-group">
		<div class="form-row">
			<div class="col-md-3 ">
			<div class="col-md-12">
				<label class="h6" for="type">Tipi:</label>
				<select name="type" class="form-control"  id="type">
					<option>Klient1</option>
					<option>Klient2</option>
					<option>Klient3</option>
				</select>
			</div>
			</div>
			<div class="col-md-3">
			<div class="col-md-12">
				<label class="h6" for="service">Shërbimi:</label>
				<select name="service" class="form-control"  id="service">
					<option>Klient1</option>
					<option>Klient2</option>
					<option>Klient3</option>
				</select>
			</div>
			</div>
			<div class="col-md-3">
				<div class="col-md-12">
					<label class="h6" for="dateofbill">Data e fatures: </label>
					<input name="dateofbill" class="form-control" id="dateofbill" type="date" aria-describedby="positionHelp">  
				</div>
			</div>
		   <div class="col-md-3">
			   <div class="col-md-12">
					<label class="h6" for="dateofpay">Data e pagesës:</label>
					<input name="dateofpay" class="form-control" id="dateofpay" type="date" aria-describedby="firstAddressHelp">
			  </div>
		  </div>
		</div>
	</div>
	<div class="form-group">
		<div class="form-row">
			<div class="col-md-3">
				<div class="col-md-12">
					<label class="h6" for="selectField">Select Field:</label>
					<select name="selectField" class="form-control"  id="selectField">
						<option>Klient1</option>
						<option>Klient2</option>
						<option>Klient3</option>
					</select>
				</div>
			</div>
			<div class="col-md-3">
			<div class="col-md-12">
				<label class="h6" for="selectOrder">Select Order:</label>
				<select name="selectOrder" class="form-control"  id="selectOrder">
					<option>Klient1</option>
					<option>Klient2</option>
					<option>Klient3</option>
				</select>
			</div>
			</div>
			<div class="col-md-3">
			<div class="col-md-12">
				<label class="h6" for="status">Statusi:</label>
				<select name="status" class="form-control"  id="status">
					<option>Klient1</option>
					<option>Klient2</option>
					<option>Klient3</option>
				</select>
			</div>
			</div>
			<div class="col-md-3">
			<div class="col-md-12">
				<label class="h6" for="numberRows">Numri i reshtave për faqe:</label>
				<select name="numberRows" class="form-control"  id="numberRows">
					<option>Klient1</option>
					<option>Klient2</option>
					<option>Klient3</option>
				</select>
			</div>
			</div>
		</div>
	</div>
	
	<!--
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<input name="searchbill" type="submit" class="btn btn-primary btn-default btn-block" value="Kërko">
						</div>
					</div>
					</div>
				<div class="col-md-6">
					<div class="row mt-3 mt-sm-0">
						<div class="col-md-12">
						<input name="reset" type="reset" class="btn btn-outline-secondary btn-default btn-block"  value="Fshij">
						</div>
					</div>
				</div>
				</div>
			</div>
			-->
	
	
	<div class="d-flex justify-content-center ">
	<input name="searchbill" type="submit" class="btn btn-primary  btn-default w-50 p-2" value="Kërko" >
	</div>
	
</form>
</div>
</div>
<br>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Raporti i faturave</div>
    <div class="card-body" style ="overflow: scroll;">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Fatura ID</th>
              <th>Tipi</th>
              <th>Nr.Faturës</th>
              <th>Statusi</th>
              <th>Shërbimi</th>
              <th>Data e fatures</th>
              <th>Përshkrimi i faturës</th>
              <th>Data e pagesës</th>
              <th>Vlera pa TVSH</th>
              <th>Vlera e TVSH-së</th>
              <th>Çmimi total</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Fatura ID</th>
              <th>Tipi</th>
              <th>Nr.Faturës</th>
              <th>Statusi</th>
              <th>Shërbimi</th>
              <th>Data e fatures</th>
              <th>Përshkrimi i faturës</th>
              <th>Data e pagesës</th>
              <th>Vlera pa TVSH</th>
              <th>Vlera e TVSH-së</th>
              <th>Çmimi total</th>
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



