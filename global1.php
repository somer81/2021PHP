<?php 
 
 $x = 10; 
 

    function myTest2(){ 
         static $y = 0;
         $y++; 
        echo $y . "<br>";
       
       # echo "Fonksiyon içinde x : $x  <br>";
      # return $y;
        }

// myTest($x);

 //echo "Fonksiyon dışında x : " . myTest(100) . "<br>";
  myTest2() ;
  myTest2() ;
  myTest2() ;
  myTest2() ;
  myTest2() ;

?>