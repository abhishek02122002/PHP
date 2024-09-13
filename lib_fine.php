<?php
function lateFine($day){
     if($day>=1 && $day<=5){
          return 1;
     }
     if($day >= 6 && $day<=10){
          return 2;
     }
     if($day >10){
          return 5;
     }

}

$day=12;
$fine = lateFine($day);
echo "your fine is  $$fine";

?>