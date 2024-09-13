<?php
// multidimensional associtive array storing data of students
$student =array(
     "john"=>array(
          "Maths"=> 85,
          "Science" =>90,
          "History"=>78
     ),
     "Jane" =>array(
          "Maths"=> 92,
          "Science" =>88,
          "History"=>84
     ),
     "Alice" => array(
          "Maths"=> 75,
          "Science" =>80,
          "History"=>70
     )
     );
     // $sum = 0 ;
     echo "<pre>";
     echo "<table border='6px'>";
     echo "<tr> <td>Name</th> <td>Maths-Score </td><td>Science-Score</td><td>History-Score</td><td> Averge</td> </tr>";
     foreach($student as $name=>$data){
          $sum =0;
          
                    foreach($data as $d){
                         $sum = $sum + $d;
                    }
          $avg = round($sum/3,2);          
          echo "<tr>";
          echo "<td>$name</td>";
          echo "<td>".$data["Maths"]."</td>";
          echo "<td>".$data["Science"]."</td>";
          echo "<td>".$data["History"]."</td>";
          echo "<td>".$avg."</td>";
          echo "</tr>";
     }
echo "</table>";
echo "</pre>";


?>