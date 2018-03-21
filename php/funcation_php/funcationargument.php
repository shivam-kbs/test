<?php
function sum($v1,$v2,$v3) //passing arguments 
{
$r =$v1 + $v2 - $v3;
return $r;
}

function multiply($v1,$v2,$v3) //passing arguments 
{
$r =$v1 * $v2 * $v3;
return $r;
}

$sum = sum(10,11,5); //function calling
$multiply= multiply(10,11,5); //function calling
echo $sum;
echo "<br>";
echo $multiply;
?>
