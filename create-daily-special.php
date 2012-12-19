<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php include 'template/includes/widgets/login_modal.php' ?> <!-- login modal -->

		<!-- row containing page header -->
		<div class="row">
			<div class="span12">
			  <h1>Add Daily Special</h1>
			</div>
		</div>
		
		<hr>		
		
		<div class="row">
			<!-- span2 -> holding first two columns spaces -->
			<div class="span2"></div>
			
			<!-- span8 -> general store info -->
			<div class="span8">
				<!-- enctype="multipart/form-data" needed for thumbnail upload -->
				<form action="create-daily-special-add.php" method="post" enctype="multipart/form-data">
					<label>Title</label>
					<input type="text" class="input-xlarge" placeholder="Mangu a peso!" name="title" />
					<label>Description</label>
					<input type="text" class="input-xlarge" placeholder="Madurito, blandito, riiiico!" name="description" />					
					<label>Thumbnail (.JPG/.PNG)</label>
					<input type="file" name="thumbnail" />										
					<br />										
					<label>Start Date</label>
					<input type="text" class="input-xlarge" placeholder="When is it valid? (eg. 2012-11-07)" name="start_date" />
					<p>				
						<input type="submit" name="submit_create_daily_special" class="btn btn-large btn-success" value="Add" />
						<a href="user-settings.php" class="btn btn-large">Cancel</a>
					</p>
				</form>				
			</div><!-- ends span8 -->
			
			<!-- span2 -> holding first two columns spaces -->
			<div class="span2"></div>
		</div><!-- ends row -->

<?php include 'template/footer.php' ?>
