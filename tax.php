<?php

$income = 100000;
$tax;
$age=45;
if($income<=10000){
     $tax = 0;
}
elseif($income >=10000 && $income <20000){
     if($age>65){
          $tax=5;
     }
     if($age<65){
          $tax = 10;
     }
}
else{
     if($age > 65){
          $tax = 15;
     }
     else{
          $tax = 20;
     }
}

$amountPaidAstax = ($income - ($income*$tax/100));
echo $amountPaidAstax;  




?>