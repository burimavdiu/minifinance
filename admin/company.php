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
				case "add_company";
				include "includes/add_company.php";
				break;
				
				case "edit_client";
				include "/includes/edit_company.php";
				break;
				
				default:
				include "includes/view_all_company.php";
				break;
			}
			?>	
			
		</div>
		 <!-- /.container-fluid-->
	</div>
    <!-- /.content-wrapper-->
 
 <?php include "includes/footer.php";?>
