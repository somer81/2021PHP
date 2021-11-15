<!DOCTYPE html>
<html>
<body>





<?php
// fonksiyon iki sayı parametre olarak alıp carpımını geri dondurur - carpim()


// fonksiyon bir diziyi parametre olarak alıp dizi elemalarının toplamını geri dondurur - sum()

function sum($numbers)
{
   $total = 0;
   foreach($numbers as $n)
   {
      $total += $n;
   }
   return $total;
}

function sum2($numbers)
{
   $total = 0;
   for($i=0; $i<Count($numbers); $i++)
   {
      $total += $numbers[$i];
   }
   return $total;
}

$nums = [10,23,56,78,33,66,90,32];
$result = sum2($nums);


print_r($nums) . "<br>"; 
echo "dizinin toplamı :" . $result;


$ad = "";
$soyad = ""; 

// echo $ad . " " . $soyad  . "<br>"; 

function name($a,$s)
{
 echo "<br>" . $a . " " . $s . "<br>"; 
}

function carpim($a,$b)
{
   return $a * $b;
}

function writeMsg() {
  echo "Hello world!";
}

name("Ömer", "Sevinç");

// call a function

echo " Carpim Sonucu : " . carpim(45,20) . "<br>";

writeMsg();
?>

</body>
</html>
