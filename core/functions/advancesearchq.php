<?php 
	include 'core/database/connect.php';

	$name = $_POST['name'];
	$city = $_POST['city'];
	$owner = $_POST['owner'];
	$zip =$_POST['zipcode'];
	$submit = $_POST['Submit'];
	$category = $_POST['category'];

	if ($submit){

   		$c = mysql_query("SELECT * FROM Categories  WHERE name LIKE '%$category%' ");
   		$r1 = mysql_fetch_assoc($c);
   		$category_id = $r1['category_id'];


		$user = mysql_query("SELECT *  FROM Users Where first_name LIKE '%$owner%' ");
		$r2 = mysql_fetch_assoc($user);
		$username = $r2['username'];

		if ($name&&$city&&$owner&&$zip || $name || $city || $owner || $zip){

			$query = mysql_query("SELECT * FROM Businesses WHERE name LIKE  '%$name%' AND city LIKE '%$city%' AND username = '$username' AND zipcode LIKE '%$zip%' ");

			while ($rows = mysql_fetch_assoc($query)){
				$id=$rows['business_id'];
    			$c=$rows['category_id'];
    			$name=$rows['name'];
    			$number=$rows['phone'];
    			$owner=$rows['username'];
    			$picture=$rows['profile_pic_url'];
    			$street=$rows['street_number'];
    			$town=$rows['city'];
    			$zipcode=$rows['zipcode'];

     			$cq = mysql_query("SELECT *  FROM Categories Where category_id = '$c' ");

     			$result = mysql_fetch_assoc($cq);
     			$category = $result['name'];

    			echo '<img  style = "width:200px" class = "img-polaroid" src =' .$picture . '>'  . '<br />'.
         		'<b>Nombre: </b>'. $name . '<br />' . '<b>Dueño: </b>' . $owner .'<br />' .
         		'<b>Telefono: </b>' . $number . '<br />' . '<b>Dirección: </b>'  . $town . ' ; ' .$street .  '<br />' . '<b>Categoría: </b>' . 
         		$category;
			}
		}

		else if ($category){

			$query = mysql_query("SELECT * FROM Businesses WHERE category_id LIKE '%$category_id' ");

			while ($rows = mysql_fetch_assoc($query)){
				$id=$rows['business_id'];
    			$c=$rows['category_id'];
    			$name=$rows['name'];
    			$number=$rows['phone'];
    			$owner=$rows['username'];
    			$picture=$rows['profile_pic_url'];
    			$street=$rows['street_number'];
    			$town=$rows['city'];
    			$zipcode=$rows['zipcode'];

     			$cq = mysql_query("SELECT *  FROM Categories Where category_id = '$c' ");

     			$result = mysql_fetch_assoc($cq);
     			$category = $result['name'];

    			echo '<img  style = "width:200px" class = "img-polaroid" src =' .$picture . '>'  . '<br />'.
         		'<b>Nombre: </b>'. $name . '<br />' . '<b>Dueño: </b>' . $owner .'<br />' .
         		'<b>Telefono: </b>' . $number . '<br />' . '<b>Dirección: </b>'  . $town . ' ; ' .$street .  '<br />' . '<b>Categoría: </b>' . 
         		$category;
			}
		}

	}
?>