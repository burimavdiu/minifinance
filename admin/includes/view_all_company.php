<!-- Example DataTables Card-->
	<div class="card mb-3">
		<div class="card-header">
		<i class="fa fa-building" aria-hidden="true"></i>Lista e të gjitha kompanive
		</div>
		<div class="card-body" style ="overflow: scroll;">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
						<th>Emri i kompanis</th>
						<th>Adresa 1</th>
						<th>Adresa 2</th>
						<th>Nr.Telefonit</th>
						<th>Telofoni mobil</th>
						<th>Nr.Fax</th>
						<th>Email</th>
						<th>Web Faqja</th>
						<th>Numri i Biznesit</th>
						<th>Nr. TVSH</th>
						<th>Nr. Fiskal</th>
						<th>Llogaria bankare I</th>
						<th>Llogaria bankare II</th>
						<th>Edit</th>
						<th>Delete</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
						<th>Emri i kompanis</th>
						<th>Adresa 1</th>
						<th>Adresa 2</th>
						<th>Nr.Telefonit</th>
						<th>Telofoni mobil</th>
						<th>Nr.Fax</th>
						<th>Email</th>
						<th>Web Faqja</th>
						<th>Numri i Biznesit</th>
						<th>Nr. TVSH</th>
						<th>Nr. Fiskal</th>
						<th>Llogaria bankare I</th>
						<th>Llogaria bankare II</th>
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
							echo "<td>".  $client['tel_no'] . "</td>";
							echo "<td>".  $client['client_email'] . "</td>";
							echo "<td>".  $client['client_web'] . "</td>";
							echo "<td>".  $client['business_register_no'] . "</td>";
							echo "<td><a href='clients.php?source=edit_client&client_id=$client_id'>Edit</a></td>";
							echo "<td><a href='clients.php?delete=$client_id'>Delete</a></td>";
							echo "</tr>";
							}
						?>


					</tbody>
				</table>
			</div>
		</div>
	</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
