<?php
//1.
function checkEvenOddNumber($num) {
    if($num % 2 == 0) {
        return "{$num} is Even Number.";
    } else {
        return "{$num} is Odd number.";
    }
}
echo checkEvenOddNumber(1); 
echo"\n";
echo checkEvenOddNumber(102); 
echo"\n";


//2.
$sum = 0;

for($i = 1; $i <= 100; $i++) {
    $sum += $i;
}

echo $sum; 
