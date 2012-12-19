<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php include 'template/includes/widgets/login_modal.php' ?> <!-- login modal -->

	<div class="row"><!-- Page title -->
			<div class="span12">
			  <h1>Customize Your Profile</h1>
			</div>
		</div>
		
		<hr>
      <div class="row">
      	<div class="span2"></div>
      	
      	<div class="span8">
		   <!-- TODO: display error messages -->
		   <?php 
		   if (isset($_GET['u'])) {
		   	$u	= $_GET['u'];
		   		   
		   	echo "<div class='alert'>";
				if ($u == "shopper") {
					echo "Done. Shopper url has been updated. <button type='button' class='close' data-dismiss='alert'> × </button>"; 			
				} 
				else if ($u == "phone") {
					echo "Done. Phone number has been updated. <button type='button' class='close' data-dismiss='alert'> × </button>";   		
				} 
				else if ($u == "address") {
					echo "Done. Address has been updated. <button type='button' class='close' data-dismiss='alert'> × </button>";   		
				} 
				else if ($u == "category") {
					echo "Done. Profile picture has been updated. <button type='button' class='close' data-dismiss='alert'> × </button>";   		
				}
				else if ($u == "profile_pic") {
					echo "Done. Profile picture has been updated. <button type='button' class='close' data-dismiss='alert'> × </button>";
				}
				echo "</div>";
			}     
	  		?>
		   	
	  		</div>
	  		<div class="span2"></div>	  		
      </div>
		<div class="row">
			<div class="span2"></div>
      	
      	<div class="span8">
      		<h2>Profile Settings</h2>
				<!-- Accordion used to create a menu with hidden elements -->
      		<div class="accordion" id="accordionUserSettings">
					<div class="accordion-group hide">
						<div class="accordion-heading" style="margin-left:10px;margin-top:10px;"></div>
						<div id="collapseOne" class="accordion-body collapse in"></div>
					</div>
					
					
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionUserSettings" href="#collapseShopper">
								Shopper
							</a>
						</div>
						<!-- First element of accordion -->
						<div id="collapseShopper" class="accordion-body collapse">
							<!-- Elements inside of name element of accordion -->
							<div class="accordion-inner">								
								<form action="edit-store-update-shopper-url.php" method="post" enctype="multipart/form-data">
									<label>Shopper URL (.PDF)</label>
									<a href="<?php echo $business_data['shopper_url']; ?>" class="thumbnail pull-left" style="margin: 5px 5px 5px 0px">												
										<img src="assets/img/pdf-icon.png" width="75px" height="75px" alt="shopper in pdf" />																		
									</a>
									<input type="file" name="shopper" />										
									<br />
									<br />
									<input type="submit" name="submit_shopper" value="Upload & Save Changes" />
								</form>
							</div>
						</div>
					</div><!-- ends shopper group -->
					
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionUserSettings" href="#collapseCategory">
								Category
							</a>
						</div>
						<!-- First element of accordion -->
						<div id="collapseCategory" class="accordion-body collapse">
							<!-- Elements inside of name element of accordion -->
							<div class="accordion-inner">								
								<form action="edit-store-update-category.php" method="post">
									<label>Category (Current: <?php echo category_name_from_category_id($business_data['category_id']); ?>)</label>
									<select name="category_id">
										<?php
										$category_list = get_categories();
										foreach ($category_list as $c) {
											if ($c['category_id'] == $business_data['category_id']) {
												echo "<option selected=\"selected\" value=". $c['category_id'] .">". $c['name'] ."</option>";
											} 
											else {
												echo "<option value=". $c['category_id'] .">". $c['name'] ."</option>";
											}
										}						
										?>										
									</select>	
									<br />
									<br />
									<input type="submit" name="submit_category" value="Save Changes" />
								</form>
							</div>
						</div>
					</div><!-- ends category group -->
					
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionUserSettings" href="#collapsePhone">
							Phone
							</a>
						</div>
						<div id="collapsePhone" class="accordion-body collapse">
							<div class="accordion-inner">
								<form action="edit-store-update-phone.php" method="post">
									<label>Phone</label>
									<input type="text" name="phone" value="<?php echo $business_data['phone']; ?>">
									<br />
									<br />
									<button type="submit" name="submit_phone" class="btn">Save Settings</button>	
								</form>													
							</div>
						</div>
					</div><!-- ends phone group -->
					
					
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionUserSettings" href="#collapseAddress">
							Address
							</a>
						</div>
						<div id="collapseAddress" class="accordion-body collapse">
							<div class="accordion-inner">
								<form action="edit-store-update-address.php" method="post">
									<label>Address</label>
									<input type="text" name="street_number" value="<?php echo $business_data['street_number']; ?>">
									<label>Zipcode</label>
									<input type="text" name="zipcode" value="<?php echo $business_data['zipcode']; ?>">
									<label>City</label>
									<input type="text" name="city" placeholder="City Name" value="<?php echo $business_data['city']; ?>">	
									<br />
									<br />
									<button type="submit" name="submit_address" class="btn">Save Settings</button>	
								</form>							
							</div>
						</div>
					</div><!-- ends address group -->
					
					
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionUserSettings" href="#collapseProfilePicture">
							Profile Picture
							</a>
						</div>
						<div id="collapseProfilePicture" class="accordion-body collapse">
							<div class="accordion-inner">
								
								<form action="edit-store-update-profile-pic-url.php" method="post" enctype="multipart/form-data">
									<label>Profile Picture (.JPG/.PNG)</label>
									<a href="<?php echo $business_data['profile_pic_url']; ?>" class="thumbnail pull-left" style="margin: 5px 5px 5px 0px">												
										<img src="<?php echo $business_data['profile_pic_url']; ?>" width="85px" height="85px" alt="profile picture" />																		
									</a>
									<input type="file" name="picture" />										
									<br />
									<br />
									<input type="submit" name="submit_profile_pic" value="Upload & Save Changes" />
								</form>
													
							</div>
						</div>
					</div><!-- ends profile picture group -->
				</div><!-- ends accordion -->
				
				
				<br />
				<!-- Button to add a store -->
				
				<a class="btn btn-large btn-success" href="create-special.php">Add Special Offer <i class="icon-plus"></i></a>
				
      	</div><!-- end of span8 -->
      	
      	<div class="span2">
      	</div>  
      </div> <!-- end row --> 

<?php include 'template/footer.php' ?>
