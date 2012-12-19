<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php include 'template/includes/widgets/login_modal.php' ?> <!-- login modal -->

<h2>Testing</h2>
<hr>

<div class="row-fluid">
	<h4>Add Week to Timestamp</h4>
	<?php 
		//$timeStamp = date("Y-m-d H:i:s", mktime(0, 0, 0));		
		//echo date("Y-m-d G:i:s", time());
		
			
	
		//$currentDate = date("Y-m-d");// current date
		
		
		$currentDate = date('Y-m-d', strtotime("2012-12-09"));
		echo "Current Date: ".$currentDate."<br>";
		
		$dateOneWeekAdded = strtotime(date("Y-m-d", strtotime($currentDate)) . " +1 week");		
		echo "Date After adding one week: ".date('Y-m-d', $dateOneWeekAdded)."<br><br>";
		
		
		$currentDate = date("Y-m-d");// current date
		echo "Current Date: ".$currentDate."<br>";
		
		$dateOneWeekAdded = strtotime(date("Y-m-d", strtotime($currentDate)) . " +1 day");
		echo "Date After adding one day: ".date('Y-m-d', $dateOneWeekAdded)."<br>";
		
	?>

</div>

<?php include 'template/footer.php' ?>
