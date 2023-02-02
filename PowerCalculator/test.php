<?php
$a=$_GET['num1'];
$b=$_GET['num2'];
echo "Power : ",($a*$b)/1000;

echo "Energy : ",(($a*$b)/1000)*10;
echo "Total RM : ", ((($a*$b)/1000)*10)*(35.42);