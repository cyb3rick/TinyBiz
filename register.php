<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php include 'template/includes/widgets/login_modal.php' ?> <!-- login modal -->




		<div class="row"><!-- Page title -->
			<div class="span12">
			  <h1>Register </h1>
			</div>
		</div>
		
		<hr>
	
      <div class="row">
      	<div class="span2"></div>

    
      	<div class="span8">
		   <?php 

		   	function create_user($username, $first_name, $last_name, $password, $email){
				$insert = mysql_query("INSERT INTO Users Values('$username','$password', '$first_name', '$last_name', '$email')");
			}
			
		    $register = $_POST['Register'];
		    $username = $_POST['username'];
		    $firstname = $_POST['first_name'];
		    $lastname = $_POST['last_name'];
		    $password = $_POST['password'];
		    $email = $_POST['email'];

		    if ($register){
		    	if ($username and $firstname and $lastname and $password and $email){

		    		create_user($username, $firstname, $lastname, $password, $email);

		  		 	echo "<div class='alert'>";
					echo "Done. You just registered. Congratulations!! <button type='button' class='close' data-dismiss='alert'> × </button>";   	
					echo "</div>";   
				}

				else{
					echo "<div class='alert'>";
					echo "Opps!, it looks like you didn't fill all of the fields. <button type='button' class='close' data-dismiss='alert'> × </button>";   	
					echo "</div>";
				}
			}
		        
	  		?>
	  	</div>
	  	<div class="span2"></div>	  		
      </div>
      

 	<div class="row">
			<div class="span2"></div>
      	</div>
      	<div class="span2"></div>     

    <form method = "POST" action = "Register.php">
    	<div class="span8">
      		<h2>Fill the fields below.</h2>
			<!-- Accordion used to create a menu with hidden elements -->
      		<div class="accordion" id="accordionUserSettings">
					<div class="accordion-group hide">
						<div class="accordion-heading" style="margin-left:10px;margin-top:10px;"></div>
						<div id="collapseOne" class="accordion-body collapse in"></div>
					</div>
	
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionUserSettings" href="#collapseUsername">
							Username
							</a>
						</div>
						<div id="collapseUsername" class="accordion-body collapse">
							<div class="accordion-inner">
								<form>
									<label>Username</label>
									<input type="text" name = "username">
									<br />
									<br />	
								</form>							
							</div>
						</div>
					</div><!-- ends email group -->
					
					
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
							
									<input type="text" name="first_name"/>
									<label>Last Name</label>
									<input type="text" name="last_name" placeholder="Last Name"/>	
									<br />
									<br />
	
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
								
									<label>Password</label>
									<input type="password" name = "password">
									<br />
									<br />
											
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
								
									<label>Email</label>
									<input type="text" name = "email">
									<br />
									<br />	
											
							</div>
						</div>
					</div><!-- ends email group -->


			</div><!-- end of span8 -->
			<input class = "btn btn-info" type="submit" name="Register" value="Save Changes" />
          
     	</div> <!-- end row --> 
     </form>


</div>
    


<?php include 'template/footer.php' ?>
