<?php include('core/init.php'); ?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("SELECT * FROM `contacts`");

//Assign Result Set
$contacts = $db->resultset();
?>
<div class="row">
		<div class="large-12 columns">
			<table>
			<thead>
					<tr>
						<th width="200">nom complet</th>
						<th width="130">telePhone</th>
						<th width="200">Email</th>
						<th width="250">numero de la chambre</th>
						<th width="100">nombre nuit</th>
						<th width="100">date check-in</th>
						<th width="150">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($contacts as $contact) : ?>
					<tr>
					<td><a href="contact.html"><?php echo $contact->first_name.' '.$contact->last_name; ?></a></td>
						<td><?php echo $contact->phone; ?></td>
						<td><?php echo $contact->email; ?></td>
						<td><?php echo $contact->chambre; ?></td>
						<td><?php echo $contact->nights; ?></td>
						<td><?php echo $contact->date_added;?></td>
						<td>
							<ul class="button-group">
								<li>
									<a href="#" class="button tiny" data-reveal-id="editModal<?php echo $contact->id; ?>" data-contact-id="<?php echo $contact->id; ?>">Edit</a>
									<div id = "editModal<?php echo $contact->id; ?>" data-cid="<?php echo $contact->id; ?>" class="reveal-modal editModal" data-reveal>
										<h2>Modifier Client</h2>
						<form id="editContact" action="#" method="post">
						  <div class="row">
							<div class="large-6 columns">
							  <label>Prenom
								<input name="first_name" type="text" placeholder="Entrer prenom" value="<?php echo $contact->first_name; ?>" />
							  </label>
							</div>
							 <div class="large-6 columns">
							  <label>Nom
								<input name="last_name" type="text" placeholder="Entrer prenom" value="<?php echo $contact->last_name; ?>" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-4 columns">
							  <label>Email
								<input name="email" type="email" placeholder="Entrer Email " value="<?php echo $contact->email; ?>" />
							  </label>
							</div>
							<div class="large-4 columns">
							  <label>Phone
								<input name="phone" type="text" placeholder="Entrer Phone" value="<?php echo $contact->phone; ?>" />
							  </label>
							</div>
							<div class="large-4 columns">
								<label>chambre
									<select name="chambre">
									<option value="001" <?php if($contact->chambre == '001'){echo 'selected';}?>>001 </option>
										<option value="002" <?php if($contact->chambre == '002'){echo 'selected';}?>>002 </option>
										<option value="003" <?php if($contact->chambre == '003'){echo 'selected';}?>>003 </option>
										<option value="004" <?php if($contact->chambre == '004'){echo 'selected';}?>>004 </option>
										<option value="005" <?php if($contact->chambre == '005'){echo 'selected';}?>>005 </option>
										<option value="006" <?php if($contact->chambre == '006'){echo 'selected';}?>>006 </option>
										<option value="007" <?php if($contact->chambre == '007'){echo 'selected';}?>>007 </option>
										<option value="008" <?php if($contact->chambre == '008'){echo 'selected';}?>>008 </option>
										<option value="009" <?php if($contact->chambre == '009'){echo 'selected';}?>>009 </option>
										<option value="010" <?php if($contact->chambre == '010'){echo 'selected';}?>>010 </option>
										<option value="011" <?php if($contact->chambre == '011'){echo 'selected';}?>>011 </option>
										<option value="012" <?php if($contact->chambre == '012'){echo 'selected';}?>>012 </option>
										<option value="013" <?php if($contact->chambre == '013'){echo 'selected';}?>>013 </option>
										<option value="014" <?php if($contact->chambre == '014'){echo 'selected';}?>>014 </option>
										<option value="015" <?php if($contact->chambre == '015'){echo 'selected';}?>>015 </option>
										<option value="016"<?php if($contact->chambre == '016'){echo 'selected';}?>>016 </option>
										<option value="017"<?php if($contact->chambre == '017'){echo 'selected';}?>>017 </option>
										<option value="018"<?php if($contact->chambre == '018'){echo 'selected';}?>>018 </option>
										<option value="019"<?php if($contact->chambre == '019'){echo 'selected';}?>>019 </option>
										<option value="020"<?php if($contact->chambre == '020'){echo 'selected';}?>>020 </option>
										<option value="021"<?php if($contact->chambre == '021'){echo 'selected';}?>>021 </option>
										<option value="022"<?php if($contact->chambre == '022'){echo 'selected';}?>>022 </option>
										<option value="023"<?php if($contact->chambre == '023'){echo 'selected';}?>>023 </option>
										<option value="024"<?php if($contact->chambre == '024'){echo 'selected';}?>>024 </option>
										<option value="025"<?php if($contact->chambre == '025'){echo 'selected';}?>>025 </option>
										<option value="026"<?php if($contact->chambre == '026'){echo 'selected';}?>>026 </option>
										<option value="027"<?php if($contact->chambre == '027'){echo 'selected';}?>>027 </option>
										<option value="028"<?php if($contact->chambre == '028'){echo 'selected';}?>>028 </option>
										<option value="029"<?php if($contact->chambre == '029'){echo 'selected';}?>>029 </option>
										<option value="030"<?php if($contact->chambre == '030'){echo 'selected';}?>>030 </option>
									

									</select>
								</label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-6 columns">
							  <label>Address 
								<input name="address1" type="text" placeholder="Entrer Address" value="<?php echo $contact->address1; ?>" />
							  </label>
							</div>
							 <div class="large-6 columns">
							  <label>nuits
								<input name="nights" type="text" placeholder="Entrer nombre de nuits" value="<?php echo $contact->nights; ?>" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-4 columns">
							  <label>Ville
								<input name="city" type="text" placeholder="Entrer ville" value="<?php echo $contact->city; ?>" />
							  </label>
							</div>
							<div class="large-4 columns">
								<label>Pays
								<select name="country">
								<?php foreach($country_array as $key => $value) : ?>
										<?php 
										if($key == $contact->country){
											$selected = 'selected';
										} else {
											$selected = '';
										}
										?>
										<option value="<?php echo $key; ?>" <?php echo $selected; ?>> <?php echo $value; ?></option>
									<?php endforeach; ?>
								</select>
							  </label>
							</div>
							<div class="large-4 columns">
								<label>Code postale
								<input name="zipcode" type="text" placeholder="Entrer Zipcode" value="<?php echo $contact->zipcode; ?>" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-12 columns">
							  <label>Notes
								<textarea name="notes" placeholder="Enter Optional Notes"><?php echo $contact->notes; ?></textarea>
							  </label>
							</div>
						  </div>
						  <input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
						  <input name="submit" type="submit" class="add-btn button right small" value="Submit">
							<a class="close-reveal-modal">&#215;</a>
						</form>
									</div>
								</li>
								<li>
									<form id="deleteContact" action="#" method="post">
										<input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
										<input type="submit" class="delete-btn button tiny secondary alert" value="Delete" />
									</form>
								</li>
							</ul>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>