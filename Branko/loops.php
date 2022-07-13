<?php
// ex 1 

for ($i = 0; $i < 50; $i++) {
    echo "Branko, " ;
}

 echo "<br>";

$num= 0;
while ($num < 50) {
    echo "Babic, ";
    $num ++;
}

echo "<br>";

$num1= 10;
do {
    echo "Branko Babic, ";
    $num1 ++;
} while ($num1 < 50); 
// while ($num1 < 5);

echo "<br>";
echo "<br>";

// ex 2

$fullstack = ["Angular", "CSS3","Sass","HTML5","JavaScript","TypeScript","Bootstrap","PHP", "MySQL", "AJAX"];
  for($i = 0; $i <count($fullstack); $i++) {
    echo "Language:   $fullstack[$i]  <br>";
  }

  // ex 3

  echo "<br><br>";
  
  $ex1 = array(1,5,66,99,33,356,52,48,78,56,93,45,74,);
  echo $largest= max($ex1);

   // ex 4
   echo "<br><br>";

   for ($i=1; $i <100 ; $i++) {
    if ($i%5 == 0) {
        echo "Full-Stack <br>";
    }
    else if (($i % 5) ==0) {
        echo "Front-End <br>";
    }
    else if (($i % 3) ==0) {
        echo "Back-End <br>";
    }
    else {
         echo $i . "<br>"; 
        }
}

 // ex 5
 echo "<br><br>";

 
