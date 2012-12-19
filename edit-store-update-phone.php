<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php 

if (isset($_POST['submit_phone'])) {
	//TODO: catch errors
	
	$phone = $_POST['phone'];
	
	$business_id = business_id_from_name($business_data['name']);
	
	// update business shopper url
	update_business_phone($business_id, $phone); 	

   header("Location: edit-store.php?u=phone"); // u=phone for message displaying in edit-store.php
}

?>

<?php include 'template/footer.php' ?>
