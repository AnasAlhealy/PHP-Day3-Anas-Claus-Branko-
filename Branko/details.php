<!-- <?php
// require_once "crud/actions/db_connect.php";
// $sql = "SELECT * FROM dishes";
// $result = mysqli_query($connect, $sql);
// $cards=''; 
// if(mysqli_num_rows($result)  > 0) {    
//    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
//     $cards .= "<div class='card' style='width: 18rem;'>
//     <img src= {$row['img']} class='card-img-top' >
//     <div class='card-body'>
//       <h5 class='card-title'> $row[name].</h5>
//       <p class='card-text'>$row[price].</p>
//       <a href='update.php?id=" .$row['dishes_id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
//      <a href='delete.php?id=" .$row['dishes_id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a>
      
//     </div>
//   </div>";
//    }
// } else {
//    $cards =  "<div class= 'errtext text-center'>No Data Available </div>";
// }

// mysqli_close($connect);
// ?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>PHP easyeate</title>
       <?php require_once "crud/components/boot.php";?>
       
   </head>
   <body>
    <div class= "container">
   <div class="row">
<!-- <?php
echo $cards

?>  -->
   </div>
   </div>
   </body>
</html>