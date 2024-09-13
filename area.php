<?php

function aRect(float $a,float $b){
return $a*$b;
}
function aTri($base,$height){
     return (1/2*($base)*($height));
}

function aCircle($rad){
     return 3.14*$rad*$rad;
}

echo aRect(9.3,5);
echo "<br>";
echo aTri(23,90);
echo"<br>";
echo aCircle(12);


?>