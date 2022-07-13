<?php
 require_once "actions/db_connect.php";
 if(isset($_GET["test"])) {
   $sql = "SELECT * FROM dishes where  dishes_id  = {$_GET['test']}";
$result = mysqli_query($connect, $sql);
if(mysqli_num_rows($result)  > 0) {    
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC)  ;      
    $cards = "<div class='card' style='width: 18rem;'>
    <img src= {$row['img']} class='card-img-top' >
    <div class='card-body'>
      <h5 class='card-title'> $row[name].</h5>
      <p class='card-text'>$row[price].</p>

      <a href='update.php?id=" .$row['dishes_id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
     <a href='delete.php?id=" .$row['dishes_id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a>
      
    </div>
  </div>";
   
}
} else {
   $cards =  "<div class= 'errtext text-center'>No Data Available </div>";
}

mysqli_close($connect);

 ?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>PHP easyeate</title>
       <?php require_once "components/boot.php";?>
       
   </head>
   <body>
    <div class= "container">
   <div class="row">
 <?php
echo $cards

?>  
   </div>
   </div>
   </body>
</html> 