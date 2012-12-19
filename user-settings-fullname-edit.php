<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php 

if (isset($_POST['submit_fullname'])) {
	//TODO: catch errors
	
	$first_name = $_POST['first_name']; // sanitized in update_user_fullname()
	$last_name = $_POST['last_name']; // sanitized in update_user_fullname()
	
	// update first and last name
	update_user_fullname($user_data['username'], $first_name, $last_name);  

   header("Location: user-settings.php?u=name");
}

?>

<?php include 'template/footer.php' ?>


