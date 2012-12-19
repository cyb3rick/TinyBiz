<?php 

include 'core/init.php';
include 'template/header.php'; 

if (isset($_POST['submit_create_store'])) {

	// sanitized in next function
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$street_number = $_POST['street_number'];
	$city = $_POST['city'];
	$zipcode = $_POST['zipcode'];	
	$openning_time = $_POST['openning_time'];
	$closing_time = $_POST['closing_time'];
	$category_id = $_POST['category_id'];	
	
	create_business($name, $phone, $street_number, $city, $zipcode, $openning_time, $closing_time, $user_data['username'], $category_id);

   header("Location: edit-store.php");
}



include 'template/footer.php'; 

?>
