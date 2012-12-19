<?php 

include 'core/init.php';
include 'template/header.php'; 

if (isset($_POST['submit_create_weekly_special'])) {

	// sanitized in next function
	$title = $_POST['title'];
	$description = $_POST['description'];
	$thumbnail_url = $_POST['thumbnail_url'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	
	create_weekly_special($business_id, $title, $description, $thumbnail_url, $start_date, $end_date);

   header("Location: user-settings.php");
}



include 'template/footer.php'; 

?>
