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
				case "add_service";
				include "includes/add_service.php";
				break;
				
				case "edit_service";
				include "/includes/edit_service.php";
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
