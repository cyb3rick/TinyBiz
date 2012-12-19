<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php include 'template/includes/widgets/login_modal.php' ?> <!-- login modal -->
 <?php include 'core/functions/searchq.php'; ?>	

<h2>Search Result</h2>

<p> <div clas = "container">
		<div class = "row">
			<div class  ="span12">
					</br>
					<a href="#WeeklyM" data-toggle="modal"><button class = "btn btn-info">Weekly Specials</button></a>
					<a href="#DailyM" data-toggle="modal"><button class = "btn btn-info">Daily Specials</button></a>
					<a href="#BusinessM" data-toggle="modal"><button class = "btn btn-info">Stores</button></a>
			</div>
		</div>
	</div>

 <div class = "span12"></br></div>

 <div class="container">
				
 		<div class="row">
			<div class="span2"></div>
			<div class="span3">	
				<h3>Stores:</h3>
				 <?php Store($query, $K) ?>	
			</div><!-- ends span3 -->

			<div class="span3">	
				<h3>Weekly Specials:</h3>
				  <?php Weekly_Specials($query2, $K) ?>
			</div><!-- ends span3 -->
			<div class="span3">
				<h3> Daily Specials:</h3>
				  <?php Daily_Specials($query3, $K) ?>	
			</div>
		</div>
	</div>	




	<!--Business Modal-->
		<div class="modal hide fade" id="BusinessM" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel">Stores</h3>
			</div>
			<div class="modal-body">
				<?php Store($query, $K) ?>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>						
			</div>
		</div><!--end modal-->

	<!--Weekly Modal-->
		<div class="modal hide fade" id="WeeklyM" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel">Weekly Specials</h3>
			</div>
			<div class="modal-body">
				<?php Weekly_Specials($query2, $K) ?>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>						
			</div>
		</div><!--end modal-->

	<!--Daily Specials Modal-->
		<div class="modal hide fade" id="DailyM" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel">Daily Specials</h3>
			</div>
			<div class="modal-body">
				<?php Daily_Specials($query3, $K) ?>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>						
			</div>
		</div><!--end modal-->

	</p>




<?php include 'template/footer.php' ?>




