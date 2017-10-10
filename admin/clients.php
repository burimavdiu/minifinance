<?php include "includes/header.php";?>

  <!-- Navigation-->
  <?php include "includes/navigation.php";?>
	<div class="content-wrapper">
		<div class="container-fluid">
		  <!-- Breadcrumbs-->
		  <ol class="breadcrumb">
			<li class="breadcrumb-item">
			  <a href="./clients.php">Clients</a>
			</li>
			<li class="breadcrumb-item active">My Dashboard</li>
		  </ol>
		  <!-- Icon Cards-->
		  <?php
			if(isset($_GET['source'])){
				$source=$_GET['source'];
			}
			else{
				$source="";
			}
			switch($source){
				case "add_client";
				include "includes/add_client.php";
				break;
				
				case "edit_client";
				include "/includes/edit_client.php";
				break;
				
				default:
				include "includes/view_all_clients.php";
				break;
			}
			?>	
			
		</div>
		 <!-- /.container-fluid-->
	</div>
    <!-- /.content-wrapper-->
 
 <?php include "includes/footer.php";?>
