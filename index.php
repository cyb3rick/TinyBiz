<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php include 'template/includes/widgets/login_modal.php' ?> <!-- login modal -->

	<div class="row-fluid">
		<ul class="thumbnails">
		  	<?php	  	
		  	// define number of items to display
		  	$items_per_page = 4;
		  	
			//check if the starting row variable was passed in the URL or not
			if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
			  //we give the value of the starting row to 0 because nothing was found in URL
			  $startrow = 0;			
			}
			else { //otherwise we take the value from the URL
			  $startrow = (int)$_GET['startrow'];
			}
	
			$query = mysql_query("SELECT title, description, thumbnail_url, start_date, end_date, weekly, business_id 
										FROM Special_Offers 
											WHERE end_date >= CURDATE()
												LIMIT $startrow, $items_per_page") or die(mysql_error());
			while ($row = mysql_fetch_assoc($query)) {				
				?>
				<li class="span3">
					<div class="thumbnail well" style="min-height:400px; overflow:hidden; text-align:center; ">
						<h4><?php echo $row['title']; ?></h4>
						
						<p><a href="store.php?bid=<?php echo $row['business_id']; ?>">store</a> |
						offer ends: <?php echo $row['end_date']; ?>
						</p>							
						
						
						<a href="<?php echo $row['thumbnail_url']; ?>">
							<img style="max-width:250px; max-height:150px;" class="img-rounded" src="<?php echo $row['thumbnail_url']; ?>" />
						</a>
						
						<br /><br />
						
						<p class="front-special-description" style="text-align:justify; padding:10px 20px 10px 20px;">
							<span style="font-weight:bold">Description</span><br />
							<?php echo $row['description']; ?>
						</p>
					</div>
				</li>
				<?php 
			}			
			?>   
		</ul>
		
		
	</div>
	
	<div class="row-fluid">
		<ul class="pager">
			<li class="previous <?php if ($startrow <= 0) echo "disabled"; ?>">
				<a href="<?php echo $_SERVER['PHP_SELF'].'?startrow='.($startrow - $items_per_page); ?>">&larr; Back</a>
		    </li>
		    <li class="next">
		    	<a href="<?php echo $_SERVER['PHP_SELF'].'?startrow='.($startrow + $items_per_page); ?>">Next &rarr;</a>
			</li>
		</ul>
	</div>
      
<?php include 'template/footer.php' ?>
