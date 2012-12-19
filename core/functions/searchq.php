<?php 
 //Searches for stores on the database. 
 function Store($query, $K){
  $query = mysql_query($query);
  $numrows = mysql_num_rows($query);

  if ($numrows > 0){
    while($rows = mysql_fetch_assoc($query)){
    $id=$rows['business_id'];
    $category=$rows['category_id'];
    $name=$rows['name'];
    $number=$rows['phone'];
    $owner=$rows['username'];
    $picture=$rows['profile_pic_url'];
    $street=$rows['street_number'];
    $town=$rows['city'];
    $zipcode=$rows['zipcode'];
 ?>
 
      <a href="store.php?bid=<?php echo $rows['business_id']?>">
         <img  style = "width:200px" class = "img-polaroid" src = "<?php echo $picture;  ?>"> 
      </a>  

      <br />

      <b>Nombre: </b> 
      <?php echo $name; ?> 
      <br /> 

      <b>Dueño: </b> 
      <?php echo owner_name_from_username($owner) ?> 
      <br />
         
      <b>Telefono: </b> 
      <?php echo $number; ?>  
      <br /> 

      <b>Dirección: </b> 
      <? echo business_address_from_id($id); ?> 
      <br /> 

      <b>Categoría: </b> 
       <?php echo category_name_from_id($category); ?>  
      <hr>   
      <br />

<?php 
        }
  }

  else {
       echo "<div class='alert'>";
       echo "Sorry no results found for: <i>" . $K . "</i> in Businesses" ; // print first logged error      
       echo "</div>";
      ;
  }
 }//Ends Function 
 
 //Searches for weekly specials on the database. 
 function Weekly_Specials($query2, $K){
  $query2 = mysql_query($query2);
  $numrows2 = mysql_num_rows($query2);
 
  if($numrows2 > 0){

    while($rows = mysql_fetch_assoc($query2)){
      $bid = $rows['business_id'];
      $start = $rows['start_date'];
      $ends = $rows ['end_date'];
      $thumbnail = $rows['thumbnail_url'];
      $description = $rows['description'];
?>
    
    <a href="store.php?bid=<?php echo $bid?>">
      <img style = "width:200px" class = "img-polaroid" src = "<?php echo $thumbnail ?>">
    </a>
    <br />

    <b> Comercio: </b>
    <?php echo business_name_from_id($bid); ?>
    <br />

    <b> Comienza: </b>
    <?php echo $start ?>
    <br />

    <b> Termina: </b>
    <?php echo $ends ?>
    <br />

    <b> Descripción </b>
    <?php echo $description ?>
    <hr>
    <br />


<?php 
     }
  }

  else {
       echo "<div class='alert'>";
       echo "Sorry no results found for: <i>" . $K . "</i> in Weekly Specials" ; // print first logged error      
       echo "</div>";
      ;
  }
 }//Ends functio.n 

 //Searches for daily specials on the database.
 function Daily_Specials($query3, $K){
  $query3 = mysql_query($query3);
  $numrows3 = mysql_num_rows($query3);

  if($numrows3 > 0){

    while($rows = mysql_fetch_assoc($query3)){
      $bid = $rows['business_id'];
      $start = $rows['start_date'];
      $thumbnail = $rows['thumbnail_url'];
      $description = $rows['description'];
?>

    <a href="store.php?bid=<?php echo $bid?>">
      <img style = "width:200px" class = "img-polaroid" src = "<?php echo $thumbnail ?>">
    </a>
    <br />

    <b> Comercio: </b>
    <?php echo business_name_from_id($bid); ?>
    <br />

    <b> Comienza: </b>
    <?php echo $start ?>
    <br />

    <b> Termina: Mañana </b>
    <br />

    <b> Descripción </b>
    <?php echo $description ?>
    <hr>
    <br />

  <?php
    }
  }

  else {
       echo "<div class='alert'>";
       echo "Sorry no results found for: <i>" . $K . "</i> in Daily Specials" ; // print first logged error      
       echo "</div>";
      ;
  }
 }//Ends Function. 
?>
