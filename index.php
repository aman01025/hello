<?php
$a = 12;
echo "This is your first php file<br>";
echo var_dump($a) . "<br>";

$arr  = array("aman","amit","anil","garvit");
foreach($arr as $value)
{
    echo "$value <br>";
}

echo "<br> Functions in PHP <br>";

function arrSum($arr)
{
    $sum = 0;
    foreach($arr as $value)
    {
        $sum += $value;
    }
    return $sum;
}
$arrr = array(2,4,5,3,5,3,4,5,5);
echo "<br>Sum is " . arrSum($arrr) . "<br>";


$d = date("D d.m.Y");
$t = date("H:m:s A e");
echo "<br> Today's date is $d and time is $t <br>";

phpinfo();
?>