<?php 

include 'core/init.php';
include 'template/header.php'; 

if (isset($_POST['submit_create_daily_special'])) {
	
	// sanitized in next function
	$title = $_POST['title'];
	$description = $_POST['description'];
	$start_date = $_POST['start_date'];
		
	// thumbnail attributes
	$name	= $_FILES['thumbnail']['name'];
	$tmp	= $_FILES['thumbnail']['tmp_name']; // temporary path where file is stored
	$type	= $_FILES['thumbnail']['type'];
	$size	= $_FILES['thumbnail']['size'];
	
	// generate a random name for the thumbnail
	$thumbnail_url	= 'uploads/' . md5( rand(0, 1000) . rand(0, 1000) . rand(0, 1000) . rand(0, 1000) ) . '-' . $name;
	
	
	
	// move thumbnail from temporary path to our uploads path
	move_uploaded_file($tmp, $thumbnail_url);
	
	create_daily_special($business_id, $title, $description, $thumbnail_url, $start_date);

   	header("Location: user-settings.php");
   	
}

include 'template/footer.php'; 

?>
