<?php
// array_combine();
// array_chunk();
// array_count_values();
// array_diff();
// array_flip();
// array_intersect();
// array_merge();
// array_pop();
// array_push();
// array_shift();
// array_unshift();
// array_reverse();
// array_search();
// in_array();
// array_slice();
// array_column();
// impload and explode functions 
$course=array("Node js","Spring Boot","laravel","Express JS","Django","JS");
print_r(array_chunk($course,2));

echo "<br><br><br>";


$colors = ["red","white","green","red","white","yellow","green","green","pink","pink"];
$result = array_count_values($colors);
print_r($result);

echo "<br><br>";

$a = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$b = array("e"=>"pink","f"=>"green","g"=>"blue");
$result = array_diff($a,$b);
print_r($result);


echo "<br><br>";

$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$res = array_flip($a1);
print_r($res);

echo "<br><br>";

$arr = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$brr = array("a"=>"red","f"=>"violet","m"=>"pink","k"=>"yellow");
$crr = array("red","blue");
$result = array_intersect($arr,$brr,$crr);
print_r($result); 


$hrr =["65"];
echo in_array(65,$hrr,"true");


?>