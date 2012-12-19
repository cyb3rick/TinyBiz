<?php 

	include 'core/init.php';

	// sanitized in next function
	$sale_id = $_GET['sale_id'];
	delete_daily_special($sale_id);

   header("Location: user-settings.php");
	exit();

?>
