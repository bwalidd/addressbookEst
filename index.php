<?php include('core/init.php'); ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOTEL</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
		<div class="large-6 columns">
			<h1>MON HOTEL</h1>
		</div>
		<div class="large-6 columns">
			<a class="add-btn button right small" data-reveal-id="addModal">Ajouter client</a>
			<div id="addModal" class="reveal-modal" data-reveal>
				<h2>Ajouter client</h2>
				<form id="addContact" action="#" method="post">
						  <div class="row">
							<div class="large-6 columns">
							  <label>NOM
								<input name="first_name" type="text" placeholder="Entrer le nom" />
							  </label>
							</div>
							 <div class="large-6 columns">
							  <label>PRENOM
								<input name="last_name" type="text" placeholder="Entrer le prenom" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-4 columns">
							  <label>Email
								<input name="email" type="email" placeholder="Entrer Email " />
							  </label>
							</div>
							<div class="large-4 columns">
							  <label>Phone 
								<input name="phone" type="text" placeholder="Entrer Phone" />
							  </label>
							</div>
							<div class="large-4 columns">
							<label>chambre
									<select name="chambre">
									  <option value="001">001 </option>
										<option value="002">002 </option>
										<option value="003">003 </option>
										<option value="004">004 </option>
										<option value="005">005 </option>
										<option value="006">006 </option>
										<option value="007">007 </option>
										<option value="008">008 </option>
										<option value="009">009 </option>
										<option value="010">010 </option>
										<option value="011">011 </option>
										<option value="012">012 </option>
										<option value="013">013 </option>
										<option value="014">014 </option>
										<option value="015">015 </option>
										<option value="016">016 </option>
										<option value="017">017 </option>
										<option value="018">018 </option>
										<option value="019">019 </option>
										<option value="020">020 </option>
										<option value="021">021 </option>
										<option value="022">022 </option>
										<option value="023">023 </option>
										<option value="024">024 </option>
										<option value="025">025 </option>
										<option value="026">026 </option>
										<option value="027">027 </option>
										<option value="028">028 </option>
										<option value="029">029 </option>
										<option value="030">030 </option>
									
									</select>
								</label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-6 columns">
							  <label>Address 
								<input name="address1" type="text" placeholder="Entrer Address" />
							  </label>
							</div>
							 <div class="large-6 columns">
							  <label>Nuits
								<input name="nights" type="number" placeholder="Entrer nombre des nuits" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-4 columns">
							  <label>Ville
								<input name="city" type="text" placeholder="Entrer ville" />
							  </label>
							</div>
							<div class="large-4 columns">
								<label>Pays
								<select name="country">
									<option>Select country</option>
									<?php foreach($country_array as $key => $value) : ?>
										<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
									<?php endforeach; ?>
								</select>
							  </label>
							</div>
							<div class="large-4 columns">
								<label>code postale
								<input name="zipcode" type="text" placeholder="Enter zip" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-12 columns">
							  <label>Notes
								<textarea name="notes" placeholder="Enter Optional Notes"></textarea>
							  </label>
							</div>
						  </div>
						  <input name="submit" type="submit" class="add-btn button right small" value="Submit">
							<a class="close-reveal-modal">&#215;</a>
						</form>
			</div>
		</div>
	</div>
    
	<!-- Loading Image -->
	<div id="loaderImage">
		<img src="img/ajax-loader.gif">
	</div>
	
	<!-- Main Content -->
	<div id="pageContent"></div>
	
    <script src="js/vendor/jquery.js"></script>
	<script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
