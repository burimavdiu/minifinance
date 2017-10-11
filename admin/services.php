<?php include "includes/header.php";?>

  <!-- Navigation-->
  <?php include "includes/navigation.php";?>
	<div class="content-wrapper">
		<div class="container-fluid">
		  <!-- Breadcrumbs-->
		  
		  <!-- Icon Cards-->
		  <?php
			if(isset($_GET['source'])){
				$source=$_GET['source'];
			}
			else{
				$source="";
			}
			switch($source){
				case "add_services";
				include "includes/add_services.php";
				break;
				
				case "edit_client";
				include "/includes/edit_services.php";
				break;
				
				default:
				include "includes/view_all_services.php";
				break;
			}
			?>	
			
		</div>
		 <!-- /.container-fluid-->
	</div>
    <!-- /.content-wrapper-->
 
 <?php include "includes/footer.php";?>
