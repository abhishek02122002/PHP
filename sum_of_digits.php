<?php
$num = 12345;
$sum =0;
while($num >0){

     $temp = $num%10;
     $sum += $temp;
     $num/=10; 
}
echo $sum;


?>