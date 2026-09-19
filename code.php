<?php
if($_SERVER['REQUEST_METHOD']==="POST")
{
    $a=$_POST["1"];
    $b=$_POST["2"];
    $sum=$a+$b;
    echo"the sum = ".$sum;
}
?>
