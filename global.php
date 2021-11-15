<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;

function myTest() {

 global $x, $y;
  $y = $x + $y;
  echo "fonksiyon içinden :" . $y . "<br>";
} 

myTest();  
echo $y; 


?>

</body>
</html>