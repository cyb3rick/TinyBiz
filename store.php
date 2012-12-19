<?php include 'core/init.php' ?>
<?php include 'template/header-store.php' ?>
<?php include 'template/includes/widgets/login_modal.php' ?> <!-- login modal -->

<?php $business_data = business_data_from_business_id($_GET['bid']); ?>
		
   	
	
		<div class="row">
			<div class="span9">
				<h1><?php echo $business_data['name']; ?></h1>
			</div>
			
			<!-- display social counters (facebook,twitter,email) -->
			<div class="span3" style="position:relative;right:0px;">
				<span class='st_facebook_vcount' displayText='Facebook'></span>
				<span class='st_twitter_vcount' displayText='Tweet'></span>
				<span class='st_email_vcount' displayText='Email'></span>
			</div>
			<!-- Supports social counters -->
			<script type="text/javascript">var switchTo5x=true;</script>
			<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
			<script type="text/javascript">stLight.options({publisher: "ur-65b186fa-64a2-e32b-6e34-7a988c2d406a"});</script>
		</div>
		
		<hr>
	
		
		<div class="row" style="margin-bottom:100px;">
			<div class="span1">
			</div>
			
			<div class="span4" style="text-align:center;">				
				<img src="<?php echo $business_data['profile_pic_url'] ?>" class="img-polaroid" max-width="250px" /> 
       	       
				<br />
       	        <br />
       	       
				<table class="table table-hover">
					<tr>
               			<td>Store</td>
               			<td><?php echo $business_data['name'] ?></td> 
					</tr>
					<tr>
						<td>Owner</td>
               			<td><?php echo owner_name_from_username($business_data['username']); ?></td>
            		</tr>
					<tr> 
               			<td>Phone</td>
               			<td><?php echo $business_data['phone'] ?></td>
            		</tr>
            		<tr>
               			<td>Category</td> 
               			<td><?php echo category_name_from_category_id($business_data['category_id']); ?></td> 
            		</tr>
            		<tr>
              	  	 	<td>Open Hours</td> 
               			<td><?php echo $business_data['openning_time'] ?></td> 
            		</tr> 
             		<tr>
                	 	<td>Closed Hours</td>
                     	<td><?php echo $business_data['closing_time'] ?></td>
            		</tr>
               	 		<td>Address</td>
              	     	<td><?php echo $business_data['street_number'] . '<br />' . $business_data['city'] . ', PR, ' . $business_data['zipcode'] ?></td>
		           	</tr> 
				</table>					 

				<hr>
				
				<p><?php likes_dislikes($_GET['bid']) ?></p>
				
				<form method="post" action = "<?php echo $_SERVER['PHP_SELF'] . '?bid=' . $_GET['bid']; ?>">
					<input name="Likes" class="btn btn-mini btn-block btn-success" type="Submit" value="Like" />
					<input name="Dislikes" class="btn btn-mini btn-block btn-danger" type="Submit" value="Dislike" />
				</form>	
				
			</div> <!-- ends left span4 -->

			<div class="span1" style="text-align:center;background-color:#fff;border-radius:10px;">
			</div>
				
			<div class="span5">
				
				<!-- concatenate address to be passed to searchPlace() -->
				<?php $full_address = $business_data['street_number'] . ', ' . $business_data['city'] . ', Puerto Rico, ' . $business_data['zipcode']; ?>
				
				<!-- container for the generated map -->
				<div id="map_canvas" style="width:100%; height:400px;"></div>
									
				<br />
				
				<!-- button calls searchPlace() function when clicked -->
				<input type="button" class="btn btn-block btn-info" value="Show on map" onclick="<?php echo "searchPlace('$full_address')";?>"/>
														
				<br />
				<br />
				
				<ul class="thumbnails">						
					<li class="span5">
						<a href="#" class="thumbnail">
							<img src="http://placehold.it/500x150" alt="">
						</a>
					</li>
					<li class="span5">
						<a href="<?php echo $business_data['shopper_url']; ?>" class="btn btn-block btn-success">Download Shopper (.pdf)</a>
					</li>
				</ul>
			</div><!-- ends span5 (second visible column) -->
				
			<div class="span1">
			</div>
		</div>

		  <a href="#commentM" class="btn btn-info btn-small" data-toggle="modal">Add a comment!</a>
        <hr>

		<div class="row">
			<div class="span12">
				<div class="accordion" id="accordion2" style="background-color:#fff;">
					<div class="accordion-group">
				    		<div class="accordion-heading">
				      			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
									Show/Hide Comments
				      			</a>
				      	</div>

				      	<div id="collapseOne" class="accordion-body collapse in" style="margin:5px 0px 5px 0px; padding:0px 5px 0px 5px;">
				      			
									<?php 
										
										$comments_list = get_comments($_GET['bid']); 
										
										foreach ($comments_list as $c) {
											echo "<div class='accordion-inner well'>";
											echo "<p style='font-size:11px;font-weight:bold;'>".$c['date_posted']."</p>";
											echo $c['body']; 
											echo "</div>";
										}
									?>				     				
				     		</div>
					</div>
			  	</div>
			</div>
		</div>
		
		<!--Comment Modal-->
		<div class="modal hide fade" id="commentM" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel">Add Comment</h3>
			</div>
			<div class="modal-body">
				<form action="store.php?bid=<?php echo $_GET['bid']; ?>" method="post">
						
					<textarea  style="padding:3px;width:100%" name="body" placeholder="Your comment goes here..."></textarea>
					<br />
					<input class="btn btn-small btn-info" type="Submit" name="submit_comment" id="CommentButton" value="Comment" aria-hidden="true"/>	
			   </form>	
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>						
			</div>
		</div><!--end modal-->

      
      

<?php include 'template/footer.php' ?>
