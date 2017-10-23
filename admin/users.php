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
				case "add_user";
				include "includes/add_user.php";
				break;
				
				case "edit_user";
				include "/includes/edit_user.php";
				break;
				
				default:
				include "includes/view_all_users.php";
				break;
			 }
			?>
			
		</div>
		 <!-- /.container-fluid-->
	</div>
    <!-- /.content-wrapper-->
 
 <?php include "includes/footer.php";?>
