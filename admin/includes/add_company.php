
	<?php
		if(isset($_POST['addClient'])){
			$mesazhi=addClient($_POST['client'],$_POST['contactPerson'],$_POST['position'],
			$_POST['firstAddress'],$_POST['secondAddress'],$_POST['city'],
			$_POST['state'],$_POST['zip'],$_POST['phone'],$_POST['mobPhone'],
			$_POST['email'],$_POST['web'],$_POST['clientRegistrationNo'],
			$_POST['fiscalNo'],$_POST['vatNo'],$_POST['clientType'],8,
			$_POST['date']);// vlera 1 e duhet te zevendesohet me id-ne e adminit
			echo "<p class='text-success'>".$mesazhi."</p>";
		}
  ?>
    
  
	<div class="card  mx-auto mt-30">
		<div class="card-header h4">Regjistrimi i Kompanisë</div>
		<div class="card-body">
        <form method="post">	
			<h5 class="alert alert-info">Të dhënat për kompanin:</h5>
			<hr> 
			<div class="form-group">
            <div class="form-row">
				<div class="col-md-12 ">
				<div class="col-md-12">
					<label class="h6" for="companyName">Emri i Kompanisë: </label>
					<input name="companyName" class="form-control" id="companyName" type="text" aria-describedby="clientHelp" required  autofocus>
				</div>
				</div>
				</div>
				</div>
		
        <div class="form-group">
            <div class="form-row">
				<div class="col-md-6">
				<div class="col-md-12">
					<label class="h6" for="firstAddress">Adresa I: </label>
					<input name="firstAddress" class="form-control" id="firstAddress" type="text" aria-describedby="positionHelp">  
				</div>
				</div>
			   <div class="col-md-6">
			   <div class="col-md-12">
					<label class="h6" for="secondAddress">Adresa II:</label>
					<input name="secondAddress" class="form-control" id="secondAddress" type="text" aria-describedby="firstAddressHelp">
              </div>
			  </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-row">
				<div class="col-md-6">
				<div class="col-md-12">
					<label class="h6" for="phone">Nr.Telefonit:</label>
					<input name="phone" class="form-control" id="phone" type="text" aria-describedby="cityHelp">
				</div>
				</div>
				<div class="col-md-6">
				<div class="col-md-12">
					<label class="h6" for="mobPhone">Telofoni mobil:</label>
					<input name="mobPhone" class="form-control" id="mobPhone" type="text" required>
				</div>
				</div>
            </div>
		</div>
		
		<div class="form-group">
            <div class="form-row">
				<div class="col-md-6">
				<div class="col-md-12">
					<label class="h6" for="nofax">Nr.Fax:</label>
					<input name="nofax" class="form-control" id="nofax" type="text">
				</div>
				</div>
            <div class="col-md-6">
			<div class="col-md-12">
					<label class="h6" for="email">Email:</label>
					<input name="email" class="form-control" id="email" type="email"></div>
            </div>
			</div>
        </div>
		<div class="form-group">
            <div class="form-row">
				<div class="col-md-6">
				<div class="col-md-12">
					<label class="h6" for="web">Web Faqja:</label>
					<input name="web" class="form-control" id="web" type="web">
					</div>
				</div>
				<div class="col-md-6">
				<div class="col-md-12">
					<label class="h6" for="nobusiness">Numri i Biznesit:</label>
					<input name="nobusiness" class="form-control" id="nobusiness" type="text" required>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
            <div class="form-row">
				<div class="col-md-6">
				<div class="col-md-12">
					<label class="h6" for="vatNo">Nr. TVSH:</label>
					<input name="vatNo" class="form-control" id="vatNo" type="text">
				
					</div>
				</div>
				<div class="col-md-6">
				<div class="col-md-12">
					<label class="h6" for="fiscalNo">Nr. Fiskal</label>
                <input name="fiscalNo" class="form-control" id="fiscalNo" type="text">
              
				</div>
				</div>
			</div>
		</div>
		
		<div class="form-group">
            <div class="form-row">
				<div class="col-md-6">
				<div class="col-md-12">
					<label  class="h6" for="bankAccount1">Llogaria bankare I</label>
					<input name="bankAccount1" class="form-control" id="bankAccount1" type="text">
              </div>
				</div>
				<div class="col-md-6">
				<div class="col-md-12">
					<label  class="h6" for="bankAccount2">Llogaria bankare II</label>
					<input name="bankAccount2" class="form-control" id="bankAccount2" type="text">
              </div>
				</div>
			</div>
		</div>
		
	  <input name="addClient" type="submit" class="btn btn-primary btn-block" value="Regjistro" >
	</form>
  </div>
</div>