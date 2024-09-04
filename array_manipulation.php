<?php
$num = [3,7,2,8,1,4,10,5];
$fil = array_filter($num,function($a){
     return $a % 2 == 0;
});

// for($i=0;$i<count($num);$i++){
//      echo $num[$i];
//      echo "<br>";
// }

// foreach($fil as $a=>$b){
//      echo "the result is $a and $b";
//      echo "<br>";
// }

$intersect = array_intersect($num,$fil);

// for($i=0;$i<count($intersect);$i++){
//       $intersect[$i]= $intersect[$i] * $intersect[$i];
     
// }
echo "The ans is";
for($i=0;$i<count($intersect);$i++){
     echo $intersect[$i];
     echo "<br>";
}

echo "Array is filtered";
echo "<br>";
echo "Array is done";



?>