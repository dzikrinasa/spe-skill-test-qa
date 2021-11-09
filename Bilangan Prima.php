<!DOCTYPE html>
<html>
<body>

<?php

$i=0;
$bil=2;
$n=5;
 while($i<$n){
            $cek=0;
            for($j=2;$j<=$bil;$j++){
                  if($bil%$j==0){
                   $cek++; 
                  }
            }
            if($cek == 1){
              echo $bil;
                  if($i < $n-1){ 
                       echo ", ";
                  }
               $i++;
            }
          $bil++;
       }
       
?>

</body>
</html>
