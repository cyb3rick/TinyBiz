<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php include 'template/includes/widgets/login_modal.php' ?> <!-- login modal -->

<?php
	// prevents users from creating more than one business!
	if (user_has_business($user_data['username'])) {
		die("Ops. You should not be here.");
	}
?>

		<!-- row containing page header -->
		<div class="row">
			<div class="span12">
			  <h1>Build Your Store</h1>
			</div>
		</div>
		
		<hr>		
		
		<div class="row">
			<!-- span2 -> holding first two columns spaces -->
			<div class="span2"></div>
			
			<!-- span4 -> general store info -->
			<div class="span4">
				<h3>General Information</h3>
				<form action="create-store-add.php" method="post">
					<input type="text" class="input-xlarge" placeholder="Store Name" name="name" />
					<input type="text" class="input-xlarge" placeholder="Phone" name="phone" />
					
					<input type="text" class="input-xlarge" placeholder="Street Number/Name" name="street_number" />
					<input type="text" class="input-xlarge" placeholder="City" name="city" />
					<input type="text" class="input-xlarge" placeholder="Zipcode" name="zipcode" />				
					<select name="category_id">
						<?php
						$category_list = get_categories();
						foreach ($category_list as $c) {
							echo "<option value=". $c['category_id'] .">". $c['name'] ."</option>";
						}						
						?>
						
					</select>
					<input type="text" class="input-xlarge" placeholder="Openning time (eg 7:00)" name="openning_time" /> <!--TODO: CHECK -->
					<input type="text" class="input-xlarge" placeholder="Closing time (eg 24:00)" name="closing_time" />
					<textarea rows="4" class="input-xlarge" placeholder="Describe your store..." name="description"></textarea>	
					<p>				
						<button type="submit" name="submit_create_store" class="btn btn-large btn-info">Next</button>
					</p>
				</form>			
				
			</div><!-- ends span4 -->
			
			<!-- span4 -> store photo -->
			<div class="span4">		
				
				<h3>Photo</h3>
				
				<!-- profile picture preview -->
				<ul class="thumbnails">						
					<li class="span3">
						<a href="#" class="thumbnail">
							<img src="http://placehold.it/300x150" alt=""/>
						</a>
					</li>					
				</ul>
				
				<!-- for uploading picture -->
				<form action="./upload.php" method="post" enctype="multipart/form-data">
					<p>
						<label for="file">Select file:</label> <input type="file" name="userfile"> <br /><br/>
						<a href="#" class="btn">Upload</a>
					</p>
				</form>					
			</div><!-- ends span4 -->
			
			<!-- span2 -> holding first two columns spaces -->
			<div class="span2"></div>
		</div><!-- ends row -->

<?php include 'template/footer.php' ?>
