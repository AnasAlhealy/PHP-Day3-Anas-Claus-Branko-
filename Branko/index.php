<?php
require_once "actions/db_connect.php";
$sql = "SELECT * FROM dishes";
$result = mysqli_query($connect, $sql);
$cards=''; 
if(mysqli_num_rows($result)  > 0) {    
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
    $cards .= "<div class='card' style='width: 18rem;'>
    <img src= {$row['img']} class='card-img-top'style=' height: 15rem;' >
    <div class='card-body'>
      <h5 class='card-title'> $row[name].</h5>
      <p class='card-text'>$row[price].</p>
      <a href=#><button class='btn btn-secondary btn-sm' type='button'>Show details</button></a>
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
<!-- 
//    $cards .= "<tr>

//         <td><img class='img-thumbnail' src= {$row['img']}</td>
//        <td>" .$row['name']."</td>
//        <td>" .$row['price']."</td>
//        <td><a href='update.php?id=" .$row['dishes_id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
//        <a href='delete.php?id=" .$row['dishes_id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>

//         </tr>"; -->