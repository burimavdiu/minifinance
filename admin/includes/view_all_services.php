  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-fw fa-wrench"></i> Lista e të gjëtha shërbimeve</div>
    <div class="card-body" style ="overflow: scroll;">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Emiri i shërbimit</th>
              <th>Përshkrimi i shërbimit</th>
              <th>Shuma aktuale</th>
              <th>Regjistruesi</th>
              <th>Data</th>
              
              <td>Edit</td>
              <td>Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Emiri i shërbimit</th>
              <th>Përshkrimi i shërbimit</th>
              <th>Shuma aktuale</th>
              <th>Regjistruesi</th>
              <th>Data</th>
              
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </tfoot>
          <tbody>
          <?php
           $services=findServices();
            while($service=mysqli_fetch_array($services)){
                $service_id=$service['service_id'];
                echo "<tr>";
                echo "<td>".  $service['service_name'] . "</td>";
                echo "<td>".  $service['service_description'] . "</td>";
                echo "<td>".  $service['actual_price'] . "</td>";
                echo "<td>".  $service['user_id'] . "</td>";
                echo "<td>".  $service['date'] . "</td>";
       
                echo "<td><a href='services.php?source=edit_service&service_id=$service_id'>Edit</a></td>";
                echo "<td><a href='services.php?delete=$service_id'>Delete</a></td>";
                echo "</tr>";
            }
          ?>
		   
		  
		  
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
<?php
	if(isset($_GET['delete'])){
		$service_del_id=$_GET['delete'];
		$query_del_service="DELETE FROM services WHERE service_id=$service_del_id";
		$result_del_user=mysqli_query($dbconn,$query_del_service);
		header('Location: services.php');
	}
?>