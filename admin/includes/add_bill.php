
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

 <!-- Forma me 4 kolona edhe pa hapsire ndermjet fushave -->
  <!-- 
<div class="card  mx-auto mt-30">
	<div class="card-header h4">Shto/Ndrysho Faturen</div>
	<div class="card-body">
	<form method="post">	
		<h5 class="alert alert-info">Të dhënat për faturen:</h5>
		<hr> 
	<div class="form-group">
		<div class="form-row">
			<div class="col-md-3 ">
				<label class="h6" for="client">Klienti (nëse ka):</label>
				<select name="client" class="form-control"  id="client">
					<option>Klient1</option>
					<option>Klient2</option>
					<option>Klient3</option>
				</select>
			</div>
			<div class="col-md-3">
				<label class="h6" for="name">Emri i shitësit:</label>
				<input name="dateofbill" class="form-control" id="dateofbill" type="text" aria-describedby="positionHelp">
			</div>
			<div class="col-md-3">
				
					<label class="h6" for="codeProjekt">Kodi i projektit: </label>
					<input name="codeProjekt" class="form-control" id="codeProjekt" type="text" aria-describedby="positionHelp">  
				
			</div>
		   <div class="col-md-3">
					<label class="h6" for="nobill">Numri i faturës:</label>
					<input name="nobill" class="form-control" id="nobill" type="text" aria-describedby="firstAddressHelp">
		  </div>
		</div>
	</div>
	<div class="form-group">
		<div class="form-row">
			<div class="col-md-3">
					<label class="h6" for="dateofpay">Data e pagesës:</label>
					<input name="dateofpay" class="form-control" id="dateofpay" type="date" aria-describedby="positionHelp">
			</div>
			<div class="col-md-3">
				<label class="h6" for="datebill">Data e faturës:</label>
				<input name="datebill" class="form-control" id="datebill" type="date" aria-describedby="positionHelp">
			</div>
			<div class="col-md-3">
				<label class="h6" for="description">Përshkrimi:</label>
				<input name="description" class="form-control" id="description" type="text" aria-describedby="positionHelp">
			</div>
			<div class="col-md-3">
				<label class="h6" for="spent">Shpenzoi:</label>
				<input name="spent" class="form-control" id="spent" type="text" aria-describedby="positionHelp">
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="form-row">
			<div class="col-md-3 ">
				<label class="h6" for="referenc">Referenca:</label>
				<input name="referenc" class="form-control" id="referenc" type="text" aria-describedby="positionHelp">
			</div>
			<div class="col-md-3">
				<label class="h6" for="typebill">Lloji i faturës:</label>
				<select name="typebill" class="form-control"  id="typebill">
					<option>Klient1</option>
					<option>Klient2</option>
					<option>Klient3</option>
				</select>
			</div>
			<div class="col-md-3">
					<label class="h6" for="register">Regjistroj: </label>
					<input name="register" class="form-control" id="register" type="text" aria-describedby="positionHelp">  
			</div>
		   <div class="col-md-3">
					<label class="h6" for="nobill">Data e regjistrimit:</label>
					<input name="nobill" class="form-control" id="nobill" type="text" aria-describedby="firstAddressHelp">
		  </div>
		</div>
	</div>
	<hr>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<input name="addbill" type="submit" class="btn btn-primary btn-default btn-block" value="Regjistro">
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
	<!-- lloji i butonit--
		<div class="d-flex justify-content-center ">
		<input name="addbill" type="submit" class="btn btn-primary  btn-lg w-50 p-2" value="Regjistro" >
		</div>
	
</form>
</div>
</div>
-->
 <!-- Mbarimi i formes me 4 kolona  -->
 
  
  
   <!-- Forma me tri kolona edhe me hapsire ndermjet fushave -->
  
<div class="card  mx-auto mt-30">
	<div class="card-header h4">Shto/Ndrysho Faturen</div>
	<div class="card-body">
	<form method="post">	
		<h5 class="alert alert-info">Të dhënat për faturen:</h5>
		<hr> 
		
		<div class="form-group">
			<div class="form-row">
				<div class="col-md-4">
				<div class="col-md-12">
					<label class="h6" for="client">Klienti (nëse ka):</label>
				<select name="client" class="form-control"  id="client">
					<option>Klient1</option>
					<option>Klient2</option>
					<option>Klient3</option>
				</select>
				</div>
				</div>
				<div class="col-md-4">
				<div class="col-md-12">
					<label class="h6" for="name">Emri i shitësit:</label>
				<input name="dateofbill" class="form-control" id="dateofbill" type="text" aria-describedby="positionHelp">
				</div>
				</div>
				<div class="col-md-4">
				<div class="col-md-12">
					<!-- <div class="col-md-12"> per me nda ne hapsire  --> 
					<label class="h6" for="codeProjekt">Kodi i projektit: </label>
					<input name="codeProjekt" class="form-control" id="codeProjekt" type="text" aria-describedby="positionHelp">  
				<!-- </div> -->
				</div>
				</div>
		  
			</div>
		</div>
		<div class="form-group">
			<div class="form-row">
				<div class="col-md-4">
				<div class="col-md-12">
					<label class="h6" for="nobill">Numri i faturës:</label>
					<input name="nobill" class="form-control" id="nobill" type="text" aria-describedby="firstAddressHelp">
				</div>
				</div>
				<div class="col-md-4">
				<div class="col-md-12">
					<label class="h6" for="dateofpay">Data e pagesës:</label>
					<input name="dateofpay" class="form-control" id="dateofpay" type="date" aria-describedby="positionHelp">
				</div>
				</div>
				<div class="col-md-4">
				<div class="col-md-12">
					<label class="h6" for="datebill">Data e faturës:</label>
				<input name="datebill" class="form-control" id="datebill" type="date" aria-describedby="positionHelp">
				</div>
				</div>
		  
			</div>
		</div>
		<div class="form-group">
			<div class="form-row">
				<div class="col-md-4">
				<div class="col-md-12">
					<label class="h6" for="description">Përshkrimi:</label>
				<input name="description" class="form-control" id="description" type="text" aria-describedby="positionHelp">
				</div>
				</div>
				<div class="col-md-4">
				<div class="col-md-12">
					<label class="h6" for="spent">Shpenzoi:</label>
					<input name="spent" class="form-control" id="spent" type="text" aria-describedby="positionHelp">
				</div>
				</div>
				<div class="col-md-4">
				<div class="col-md-12">
					<label class="h6" for="referenc">Referenca:</label>
					<input name="referenc" class="form-control" id="referenc" type="text" aria-describedby="positionHelp">  
				</div>
				</div>
		  
			</div>
		</div>
			<div class="form-row">
				<div class="col-md-4">
				<div class="col-md-12">
					<label class="h6" for="description">Përshkrimi:</label>
				<input name="description" class="form-control" id="description" type="text" aria-describedby="positionHelp">
				</div>
				</div>
				<div class="col-md-4">
				<div class="col-md-12">
					<label class="h6" for="typebill">Lloji i faturës:</label>
					<select name="typebill" class="form-control"  id="typebill">
						<option>Klient1</option>
						<option>Klient2</option>
						<option>Klient3</option>
					</select>
				</div>
				</div>
				<div class="col-md-4">
				<div class="col-md-12">
					<label class="h6" for="nobill">Data e regjistrimit:</label>
					<input name="nobill" class="form-control" id="nobill" type="text" aria-describedby="firstAddressHelp">
				</div>
				</div>
		  
			</div>
		</div>
		<hr>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<input name="addbill" type="submit" class="btn btn-primary btn-default btn-block" value="Regjistro">
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
	<!-- lloji i butonit
		<div class="d-flex justify-content-center ">
		<input name="addbill" type="submit" class="btn btn-primary  btn-lg w-50 p-2" value="Regjistro" >
		</div>
	-->
</form>
</div>
</div>