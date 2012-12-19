<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php 

if (isset($_POST['submit_category'])) {
	//TODO: catch errors
	
	$category_id = $_POST['category_id'];
	
	$business_id = business_id_from_name($business_data['name']);
	
	// update business shopper url
	update_business_category($business_id, $category_id); 	

   	header("Location: edit-store.php?u=category"); // u=category for message displaying in edit-store.php
}

?>

<?php include 'template/footer.php' ?>
