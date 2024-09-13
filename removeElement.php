<?php

function removeElement(&$arr,$index){
     $newArr = [];
  for($i=0;$i<$index;$i++){
     array_push($newArr,$arr[$i]);
  }
  for($i=$index+1;$i<count($arr);$i++){
     array_push($newArr,$arr[$i]);
  }

  return $newArr;
}

$array = array(1,2,3,4556,677);
$result = removeElement($array,2);
print_r($result);




?>