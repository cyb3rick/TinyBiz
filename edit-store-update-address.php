<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php 

if (isset($_POST['submit_address'])) {
	//TODO: catch errors
	
	$street_number = $_POST['street_number'];
	$city = $_POST['city'];
	$zipcode = $_POST['zipcode'];
	
	$business_id = business_id_from_name($business_data['name']);
	
	// update business shopper url
	update_business_address($business_id, $street_number, $city, $zipcode); 	

   header("Location: edit-store.php?u=address"); // u=address for message displaying in edit-store.php
}

?>

<?php include 'template/footer.php' ?>
