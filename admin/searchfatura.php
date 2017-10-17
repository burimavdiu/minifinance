<?php
    include "includes/header.php";
    session_start();
    if (!isset($_SESSION["user"])) {
        header("Location: ../index.php");
    }
?>
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
				case "search_bill";
				include "includes/searchbill.php";
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
