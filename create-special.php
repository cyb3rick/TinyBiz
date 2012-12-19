<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php include 'template/includes/widgets/login_modal.php' ?> <!-- login modal -->

		<!-- row containing page header -->
		<div class="row">
			<div class="span12">
			  <h1>Add Special Offer</h1>
			</div>
		</div>
		
		<hr>		
		
		<div class="row">
			<!-- span2 -> holding first two columns spaces -->
			<div class="span2"></div>
			
			<!-- span8 -> general store info -->
			<div class="span8">
				<!-- enctype="multipart/form-data" needed for thumbnail upload -->
				<form action="create-special-add.php" method="post" enctype="multipart/form-data">
				
					<label>Title</label>
					<input type="text" class="input-xlarge" placeholder="Agüacate a $1" name="title" />
										
					<label>Description</label>
					<input type="text" class="input-xlarge" placeholder="Los agüacates más grandes de Puerto Rico. Verdes y maduros, los tenemos." name="description" />
					
					<label>Thumbnail (.JPG/.PNG)</label>
					<input type="file" name="thumbnail" />
										
					<br />
															
					<label>Start Date</label>					
					<input type="text" class="input-xlarge" value="<?php echo date("Y-m-d", time()) ?>" id="dp1" name="start_date">
															
					<label>Duration</label>
					<label class="radio">
						<input type="radio" name="optionsDuration" id="optionsRadios1" value="1" checked>
						<span class="badge badge-info">One Week</span>
					</label>					
					<label class="radio">
						<input type="radio" name="optionsDuration" id="optionsRadios2" value="0">
						<span class="badge badge-important">One Day&nbsp;&nbsp;&nbsp;</span> 
					</label>
					
					<br />
										
					<input type="submit" name="submit_create_special" class="btn btn-large btn-success" value="Add" />
					<a href="user-settings.php" class="btn btn-large">Cancel</a>
					
				</form>				
			</div><!-- ends span8 -->
			
			<!-- span2 -> holding first two columns spaces -->
			<div class="span2"></div>
		</div><!-- ends row -->

<?php include 'template/footer.php' ?>
