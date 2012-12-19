
<?php 

include 'core/init.php';


// file attributes
$name	= $_FILES['shopper']['name'];
$tmp	= $_FILES['shopper']['tmp_name']; // temporary path where file is stored
$type	= $_FILES['shopper']['type'];
$size	= $_FILES['shopper']['size'];

// generate a random name for the file
$shopper_url	= 'uploads/' . md5( rand(0, 1000) . rand(0, 1000) . rand(0, 1000) . rand(0, 1000) ) . '-' . $name;

// more file from temporary path to our uploads path
move_uploaded_file($tmp, $shopper_url);

//TODO: store file url in business
update_business_shopper_url($business_id, $shopper_url); // $business_id defnd in init.php

header("Location: edit-store.php?u=shopper");

?>
