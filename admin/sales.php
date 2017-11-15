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
		 <!-- <ol class="breadcrumb">
			<li class="breadcrumb-item">
			  <a href="./users.php">Users</a>
			</li>
			<li class="breadcrumb-item active">My Dashboard</li>
		  </ol>
		  -->
		  <!-- Icon Cards-->
		  <?php
			if(isset($_GET['source'])){
				$source=$_GET['source'];
			}
			else{
				$source="";
			}
			switch($source){
				case "add_sale";
				include "includes/add_sale.php";
				break;
				
				case "edit_sale";
				include "/includes/edit_sale.php";
				break;
				
				default:
				include "includes/view_all_sales.php";
				break;
			 }
			?>
			
		</div>
		 <!-- /.container-fluid-->
	</div>
    <!-- /.content-wrapper-->
 
 <?php include "includes/footer.php";?>
