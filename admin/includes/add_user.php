
	<?php
		if(isset($_POST['addUser'])){
			$mesazhi=addUser($_POST['firstname'],$_POST['lastname'],$_POST['password'],$_POST['email'],$_POST['username'],$_POST['phone']);
			echo $mesazhi;
		}
		
	?>
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Regjistrimi i Perdoruesit</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="firstname">Emri : </label>
                <input name="firstname" class="form-control" id="firstname" type="text" aria-describedby="nameHelp">
              </div>
              <div class="col-md-6">
                <label for="lastname">Mbiemri : </label>
                <input name="lastname" class="form-control" id="lastname" type="text" aria-describedby="nameHelp">
              </div>
            </div>
          </div>
            <div class="form-group">
            <label for="department">Departamenti</label>
            <?php
                echo '<select name="department" class="form-control"  id="department">';
				$departments=findDepartments();
				
                while($dep=mysqli_fetch_array($departments)){
                    echo "<option value='".$dep['dep_id']."'> ". $dep['dep_name']. "</option>";

                }
                echo '</select>';
            ?>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input name="email" class="form-control" id="email" type="email" aria-describedby="emailHelp" >
          </div>
		  <div class="form-group">
            <label for="phone">Telefoni</label>
            <input name="phone" class="form-control" id="phone" type="text" aria-describedby="telefoniHelp" >
          </div>
		   <div class="form-group">
            <label for="username">Perdoruesi</label>
            <input name="username" class="form-control" id="username" type="text" aria-describedby="perdoruesiHelp" >
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">Fjalekalimi</label>
                <input name="password" class="form-control" id="password" type="password">
              </div>
              <div class="col-md-6">
                <label for="confirmPassword">Konfirmo Fjalekalimin</label>
                <input class="form-control" id="confirmPassword" type="password">
              </div>
            </div>
            <div class="form-group">
                <label for="registrar">Regjistruesi</label>
                <input name="registrar" class="form-control" id="registrar" type="text"  aria-describedby="registrarHelp" >
          </div>
          </div>
            
		  <input name="addUser" type="submit" class="btn btn-primary btn-block" value="Regjistro">
        </form>
      </div>
    </div>