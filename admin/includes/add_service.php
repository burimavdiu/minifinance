<?php
		if(isset($_POST['addService'])){
			$mesazhi=addService($_POST['servicename'],$_POST['servicedescription'],$_POST['actualprice'],9,
			$_POST['date']);// vlera 1 e duhet te zevendesohet me id-ne e adminit
			echo "<p class='text-success'>".$mesazhi."</p>";
		}

	 ?>
<div class="card  mx-auto mt-30">
	<div class="card-header h4">Regjistrimi i shërbimit</div>
	<div class="card-body">
		<form method="post">	
		<h5 class="alert alert-info">Të dhënat për regjistrimin e shërbimit:</h5>
		<hr>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-12">
					<div class="col-md-12">
						<label class="h6" for="servicename">Emri i shërbimit: </label>
						<input name="servicename" type="text" class="form-control" id="servicename" aria-describedby="nameHelp" required  autofocus>
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-12">
					<div class="col-md-12">
						<label class="h6" for="servicedescription">Përshkrimi i shërbimit: </label>
						<input name="servicedescription" type="text" class="form-control" id="servicedescription"
						type="text" aria-describedby="nameHelp">
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-12">
					<div class="col-md-12">
						<label  class="h6" for="actualprice">Shuma aktuale: </label>
						<input name="actualprice" class="form-control" id="actualprice" type="text" aria-describedby="nameHelp" required>
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-12">
					<div class="col-md-12">
						<label  class="h6" for="registrar">Regjistruesi: </label>
						<input name="registrar" class="form-control" id="registrar" type="text" aria-describedby="nameHelp">
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-12">
					<div class="col-md-12">
						<label class="h6" for="date">Data: </label>
						<input name="date" class="form-control" id="date" type="date" aria-describedby="nameHelp">
				</div>
				</div>
				</div>
			</div>
			<!--<div class="form-group">
				<label for="department">Departamenti</label>
				<?php
				  /*  echo '<select name="departments" class="form-control"  id="department">';
					$departments=findDepartments();
					
					while($dep=mysqli_fetch_array($departments)){
						echo "<option value='".$dep['dep_id']."'> ". $dep['dep_name']. "</option>";
					}
					echo '</select>';
				*/?>
			</div>-->
			<hr>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<input name="addService" type="submit" class="btn btn-primary btn-default btn-block" value="Regjistro">
						</div>
					</div>
					</div>
				<div class="col-md-6">
					<div class="row mt-3 mt-md-0">
						<div class="col-md-12">
						<input name="reset" type="reset" class="btn btn-outline-secondary btn-default btn-block"  value="Fshij">
						</div>
					</div>
				</div>
				</div>
			</div>
	</div>
		</form>
	</div>
</div>
