
	<?php
		/*if(isset($_POST['addUser'])){
			$mesazhi=addUser($_POST['firstname'],$_POST['lastname'],$_POST['departments'],$_POST['password'],$_POST['email'],$_POST['username'],$_POST['phone']);
			echo $mesazhi;
			
		}*/
	?>
	
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
		  <div class="form-group">
            <div class="form-row">
                <label class="h6"" for="servicename">Emri i shërbimit: </label>
                <input name="servicename" class="form-control" id="servicename" type="text" aria-describedby="nameHelp">
            </div>
          </div>
		   <div class="form-group">
            <div class="form-row">
                <label class="h6"" for="servicedescription">Përshkrimi i shërbimit: </label>
                <input name="servicedescription" class="form-control" id="servicedescription" type="text" aria-describedby="nameHelp">
            </div>
          </div>
		   <div class="form-group">
            <div class="form-row">
                <label  class="h6"" for="actualprice">Shuma aktuale: </label>
                <input name="actualprice" class="form-control" id="actualprice" type="text" aria-describedby="nameHelp">
            </div>
          </div>
		  <div class="form-group">
            <div class="form-row">
                <label  class="h6"" for="registrar">Regjistruesi: </label>
                <input name="registrar" class="form-control" id="registrar" type="text" aria-describedby="nameHelp">
            </div>
          </div>
		  <div class="form-group">
            <div class="form-row">
                <label class="h6"" for="date">Data: </label>
                <input name="date" class="form-control" id="date" type="date" aria-describedby="nameHelp">
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
		  
          
         
		  <input name="addService" type="submit" class="btn btn-primary btn-block" value="Regjistro">
        </form>
      </div>
    </div>