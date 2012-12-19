<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php include 'template/includes/widgets/login_modal.php' ?> <!-- login modal -->



		<!-- row containing page header -->
		<div class="row">
			<div class="span12">
			  <h1>Add Weekly Special</h1>
			</div>
		</div>
		
		<hr>		
		
		<div class="row">
			<!-- span2 -> holding first two columns spaces -->
			<div class="span2"></div>
			
			<!-- span8 -> general store info -->
			<div class="span8">
				<form action="create-weekly-special-add.php" method="post">
					<label>Title</label>
					<input type="text" class="input-xlarge" placeholder="Mangu a peso!" name="title" />
					<label>Description</label>
					<input type="text" class="input-xlarge" placeholder="Madurito, blandito, riiiico!" name="description" />	
					<label>Thumbnail Url (.png)</label>				
					<input type="text" class="input-xxlarge" placeholder="http://domain.com/image.png" name="thumbnail_url" />
					<label>Start Date</label>
					<input type="text" class="input-xlarge" placeholder="When is it valid? (eg. 2012-11-07)" name="start_date" />
					<label>End Date</label>
					<input type="text" class="input-xlarge" placeholder="When does it expires? (eg. 2012-11-07)" name="end_date" />	
					<p>				
						<input type="submit" name="submit_create_weekly_special" class="btn btn-large btn-success" value="Add" />
						<a href="user-settings.php" class="btn btn-large">Cancel</a>
					</p>
				</form>			
				
			</div><!-- ends span8 -->
			
			<!-- span2 -> holding first two columns spaces -->
			<div class="span2"></div>
		</div><!-- ends row -->

<?php include 'template/footer.php' ?>
