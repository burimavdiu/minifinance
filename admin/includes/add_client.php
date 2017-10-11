
	<?php
		/* if(isset($_POST['addUser'])){
			$mesazhi=addUser($_POST['firstname'],$_POST['lastname'],$_POST['departments'],$_POST['password'],$_POST['email'],$_POST['username'],$_POST['phone']);
			echo $mesazhi;
		}
	*/  ?>
    <div class="card  mx-auto mt-30">
      <div class="card-header">Regjistrimi i Klientit</div>
      <div class="card-body">
        <form method="post">		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="client">Klienti : </label>
                <input name="client" class="form-control" id="client" type="text" aria-describedby="clientHelp">
              </div>
              <div class="col-md-6">
                <label for="contactPerson">Kontakt Personi  : </label>
                <input name="contactPerson" class="form-control" id="contactPerson" type="text" aria-describedby="contactPersonHelp">
              </div>
            </div>
          </div>
            <div class="form-group">
            <label for="position">Pozita(Titulli)</label>
              <input name="position" class="form-control" id="position" type="text" aria-describedby="positionHelp">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="firstAddress">Adresa I </label>
                <input name="firstAddress" class="form-control" id="firstAddress" type="text" aria-describedby="firstAddressHelp">
              </div>
              <div class="col-md-6">
                <label for="secondAddress">Adresa II  : </label>
                <input name="secondAddress" class="form-control" id="secondAddress" type="text" aria-describedby="secondAddressHelp">
              </div>
            </div>
          </div>
            <div class="form-group">
                <div class="form-row">
              <div class="col-md-4">
                <label for="city">Qyteti</label>
                <input name="city" class="form-control" id="city" type="text" aria-describedby="cityHelp">
              </div>
              <div class="col-md-4">
                <label for="state">Shteti</label>
                <input name="state" class="form-control" id="state" type="text" aria-describedby="stateHelp">
              </div>
                <div class="col-md-4">
                    <label for="zip">Kodi Postar(Zip)</label>
                    <input name="zip" class="form-control" id="lzip" type="text" aria-describedby="zipHelp">
              </div>
            </div>
          </div>
        <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="phone">Telofoni i Punes</label>
                <input name="phone" class="form-control" id="phone" type="phone">
              </div>
              <div class="col-md-6">
                <label for="mobPhone">Telofoni Mobil</label>
                <input class="form-control" id="mobPhone" type="text">
              </div>
            </div>
            </div>
             <div class="form-group">
                <div class="form-row">
              <div class="col-md-6">
                <label for="password">Email</label>
                <input name="email" class="form-control" id="email" type="email">
              </div>
              <div class="col-md-6">
                <label for="web">Web Faqja</label>
                <input class="form-control" id="web" type="web">
              </div>
            </div>
            </div>
		  <div class="form-group">
            <label for="clientRegistrationNo">Nr. Regjistrimit të Klientit</label>
            <input name="clientRegistrationNo" class="form-control" id="clientRegistrationNo" type="text" aria-describedby="telefoniHelp" >
          </div>
		   
          <div class="form-group">
                <div class="form-row">
              <div class="col-md-6">
                <label for="fiscalNo">Nr. Fiskal</label>
                <input name="fiscalNo" class="form-control" id="fiscalNo" type="text">
              </div>
              <div class="col-md-6">
                <label for="VatNo">Nr. TVSH</label>
                <input class="form-control" id="VatNo" type="text">
              </div>
            </div>
            </div>
            <div class="form-group">
            <label for="clientType">Llojo i Klientit</label>
                <select name="clientType" class="form-control"  id="clientType">
                    <option>Klient1</option>
                </select>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="registrar">Regjistroi</label>
                <input name="registrar" class="form-control" id="registrar" type="text">
              </div>
              <div class="col-md-6">
                <label for="date">Koha e Regjistrimit</label>
                <input class="form-control" id="date" type="datetime-local">
              </div>
            </div>
            </div>
		  <input name="addClient" type="submit" class="btn btn-primary btn-block" value="Regjistro">
        </form>
      </div>
    </div>