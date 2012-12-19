<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php include 'template/includes/widgets/login_modal.php' ?> <!-- login modal -->

		<div class="row"><!-- Page title -->
			<div class="span12">
			  <h1><?php echo $user_data['first_name'] . " " . $user_data['last_name']; ?>'s Profile</h1>
			</div>
		</div>
		
		<hr>
      <div class="row">
      	<div class="span2"></div>
      	
      	<div class="span8">
		   <?php 
		   if (isset($_GET['u'])) {
		   	$u = $_GET['u'];
		   	echo "<div class='alert'>";
		   	if ($u == "name") {
		   		echo "Done. Your first and last name has been updated.";
		   	}
		   	else if ($u == "epass") {
		   		echo "Error: Some passwords fields were empty.";
		   	}
		   	else if ($u == "opass") {
		   		echo "Error: That is not your current password.";
		   	}
		   	else if ($u == "cpass") {
		   		echo "Error: Wrong password confirmation.";
		   	}
		   	else if ($u == "pass") {
		   		echo "Done. Your password was successfully updated.";
		   	}
		   	echo " <button type='button' class='close' data-dismiss='alert'> × </button></div>";
		   }
		   
		      
	  		?>
	  		</div>
	  		<div class="span2"></div>	  		
      </div>
		<div class="row">
			<div class="span2"></div>
      	
      	<div class="span8">
      		<h2>General Account Settings</h2>
			<!-- Accordion used to create a menu with hidden elements -->
      		<div class="accordion" id="accordionUserSettings">
					<div class="accordion-group hide">
						<div class="accordion-heading" style="margin-left:10px;margin-top:10px;"></div>
						<div id="collapseOne" class="accordion-body collapse in"></div>
					</div>
					
					
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionUserSettings" href="#collapseName">
								Name
							</a>
						</div>
						<!-- First element of accordion -->
						<div id="collapseName" class="accordion-body collapse">
							<!-- Elements inside of name element of accordion -->
							<div class="accordion-inner">								
								<form action="user-settings-fullname-edit.php" method="post"><!-- TODO: define the action here -->
									<label>First Name</label>
									<input type="text" name="first_name" value="<?php echo $user_data['first_name']; ?>" />
									<label>Last Name</label>
									<input type="text" name="last_name" placeholder="Last Name" value="<?php echo $user_data['last_name']; ?>" />	
									<br />
									<br />
									<input type="submit" name="submit_fullname" value="Save Changes" />
								</form>
							</div>
						</div>
					</div><!-- ends name group -->
					
					
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionUserSettings" href="#collapsePassword">
								Password
							</a>
						</div>
						<div id="collapsePassword" class="accordion-body collapse">
							<div class="accordion-inner">
								<form action="user-settings-password-edit.php" method="post">
									<label>Old Password</label>
									<input type="password" name="old_pass" />
									<label>New Password</label>
									<input type="password" name="new_pass" />
									<label>Confirm Password</label>
									<input type="password" name="new_pass_conf" />
									<br />
									<br />
									<input type="submit" name="submit_password" value="Save Settings" />	
								</form>							
							</div>
						</div>
					</div><!-- ends pwd group -->
					
					
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionUserSettings" href="#collapseEmail">
							Email
							</a>
						</div>
						<div id="collapseEmail" class="accordion-body collapse">
							<div class="accordion-inner">
								<form action="user-settings-email-edit.php" method="post">
									<label>Email</label>
									<input type="text" name="email" value="<?php echo $user_data['email']; ?>">
									<br />
									<br />
									<button type="submit_email" class="btn">Save Settings</button>	
								</form>							
							</div>
						</div>
					</div><!-- ends email group -->
			<?php
			if (user_has_business($user_data['username']) == 1) {
				?>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionUserSettings" href="#collapseStore">
							Store
							</a>
						</div>
						<div id="collapseStore" class="accordion-body collapse">
							<div class="accordion-inner">
								<img style="margin-right:10px;" class="pull-left" src="<?php echo $business_data['profile_pic_url']; ?>" width="100px" height="100px" />
								<h2>
									<a href="store.php?bid=<?php echo business_id_from_name($business_data['name']); ?>" class="link">
										<?php echo $business_data['name']; ?>
									</a>
								</h2>
								<div class="clearfix"></div>
								<hr>
									<p>
										<span class="label label-important">Important</span> Soon you'll be able to have multiple stores.
									</p>
								<hr>
								<!-- Button to add a special -->
								<a class="btn" href="create-special.php">Special Offer <i class="icon-plus"></i></a>		
								<a href="edit-store.php" class="btn">Edit <i class="icon-edit"></i></a>
								<a href="#" class="btn">Remove <i class="icon-remove"></i></a>									
												  					
							</div>
						</div>
					</div><!-- ends store group -->
				<?php				
			}
			else {
				?>
				<br />
				<!-- Button to add a store -->
				<a class="btn btn-large btn-info" href="create-store.php">Add Store <i class="icon-plus"></i></a>
				<?php
			}
			?>
				</div><!-- ends accordion -->
				
			<?php

			
			//echo "SELECT COUNT(`sale_id`) FROM `Special_Offers` WHERE `business_id`='$business_id';"; die();
			
			$has_specials = business_has_specials($business_id);
			
			
			if ($has_specials) { // user has created specials
			?>
				<h2>Special Offers</h2>
				<table class="table table-hover">
					<tr><td>Thumbnail</td><td>Title</td><td>Start Date</td><td>End Date</td><td>Remove</td></tr>
			<?php						
				
				/* get indexed array of assoc arrays with keys => Weekly_sales fields */
				$specials = get_specials($business_id); 
				
				foreach ($specials as $s) {					
					echo "<tr><td><img class=img-polaroid width=50px height=50px src=".$s['thumbnail_url']."></td>";
					echo "<td>" . $s['title'] . "</td>";
					echo "<td>" . $s['start_date'] . "</td>";
					echo "<td>" . $s['end_date'] . "</td>";
					echo "<td><a href='delete-special.php?sale_id=".$s['sale_id']."'>Remove</a></td></tr>";
				}
 			}			
			?>				
				</table>		
			</div><!-- end of span8 -->
      	
      	<div class="span2">
      	</div>  
      </div> <!-- end row -->      

<?php include 'template/footer.php' ?>
