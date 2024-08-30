<?php

$year = 10;
$month=2;
$days=4;

if($year > 0){
     if(1<=$month && $month<=12){
        if($month == 1){
          if(1<=$days && $days<=31){
               echo "valid day";
          }
          else{
               echo "Invalid day";
          }
        }
        elseif($month ==2){
          if(1<=$days && $days<=28){
               echo "valid day";
          }
          else{
               echo "Invalid day";
          }
        }
        elseif($month == 3){
          if(1<=$days && $days<=31){
               echo "valid day";
          }
          else{
               echo "Invalid day";
          }
        }
        elseif($month ==4){
          if(1<=$days && $days<=30){
               echo "valid day";
          }
          else{
               echo "Invalid day";
          }
        }
        elseif($month ==5){
          if(1<=$days && $days<=31){
               echo "valid day";
          }
          else{
               echo "Invalid day";
          }
        }
        elseif($month ==6){
          if(1<=$days && $days<=30){
               echo "valid day";
          }
          else{
               echo "Invalid day";
          }
        }
        elseif($month ==7){
          if(1<=$days && $days<=31){
               echo "valid day";
          }
          else{
               echo "Invalid day";
          }
        }
        elseif($month ==8){
          if(1<=$days&& $days<=30){
               echo "valid day";
          }
          else{
               echo "Invalid day";
          }
        }
        elseif($month ==9){
          if(1<=$days && $days<=31){
               echo "valid day";
          }
          else{
               echo "Invalid day";
          }
        }
        elseif($month ==10){
          if(1<=$days && $days<=30){
               echo "valid day";
          }
          else{
               echo "Invalid day";
          }
        }
        elseif($month ==11){
          if(1<=$days && $days<=31){
               echo "valid day";
          }
          else{
               echo "Invalid day";
          }
        }
        elseif($month ==12){
          if(1<=$days && $days<=31){
               echo "valid day";
          }
          else{
               echo "Invalid day";
          }
        }
     }
     else{
          echo "Invalid month";
     }
}
else{
     echo "Invalid year";
}





?>