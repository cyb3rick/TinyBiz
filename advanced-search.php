<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php include 'template/includes/widgets/login_modal.php' ?> <!-- login modal -->

<h2>Advanced Search</h2>
 <p>
   <div class="container">	
	
		<div class="row">
			<div class="span12">
			</div>
		</div>
		<hr>
	
		<div class="row" style="margin-top:50px; margin-bottom:100px;">
			<div class="span4 offset2" style="text-align:center;">
				<h3>&nbsp;</h3>				
				<form  method="POST" action="advanced-search.php">
					<input name = "name" class="input-large" type="text" placeholder="Store Name">
					<input name = "city" class="input-large" type="text" placeholder="City"><br />				
					<input name = "zipcode" class="input-large" type="text" placeholder="ZipCode"><br />
					<input name = "owner" class="input-large" type="text" placeholder="Owner"><br />
					<input name = "category" classs="input-large" type="text" placeholder="Category"><br />
					<input class="btn btn-large  btn-info" type="Submit" name="Submit" id="CommentButton" value="Submit" style="margin-left:10%; margin-top:5%"/>
			    </form>	
			</div>
			<div class="span4">
				<h3>Tips</h3>
				<p>If you couldn't find the store you were looking for, here you can refine your search.</p><p>Some useful hints:</p>
				<ul style="list-style-type: disc">
					<li>The more fields you fill, the more specific your search will be.</li>		
					<li>Use the first name of the business you are looking for.</li>		
					<li>Use just the first name of the owner.</li>
					<li>If you don't know the zipcode; don't worry, well work it out for you.</li>
					<li> <p>Some of the available Categories are:</p>
						<ul>Sports</ul>
						<ul>Restaurants</ul>
						<ul>Market Places</ul>
					    <ul>Chinchorros</ul>
					</li>
				</ul>
				<br />
			</div>
		</div>


		<div class="row">
			<div class="span12">
		 		<?php include 'core/functions/advancesearchq.php'; ?>
		 	</div>
		</div>		
  </p>

<?php include 'template/footer.php' ?>
