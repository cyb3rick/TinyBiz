
<?php 

include 'core/init.php';


// file attributes
$name	= $_FILES['picture']['name'];
$tmp	= $_FILES['picture']['tmp_name']; // temporary path where file is stored
$type	= $_FILES['picture']['type'];
$size	= $_FILES['picture']['size'];

// generate a random name for the file
$profile_pic_url	= 'uploads/' . md5( rand(0, 1000) . rand(0, 1000) . rand(0, 1000) . rand(0, 1000) ) . '-' . $name;

// more file from temporary path to our uploads path
move_uploaded_file($tmp, $profile_pic_url);

// store file url in business
update_business_profile_pic($business_id, $profile_pic_url); // $business_id defnd in init.php

header("Location: edit-store.php?u=profile_pic");

?>
