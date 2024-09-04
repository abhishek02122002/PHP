<?php
$num1=10;
$num2=19;
while($num1 != $num2){
     if($num1>$num2){
          $num1-=$num2;
     }
     else{
          $num2 -=$num2;
     }
}

echo $num2;
?>