<?php 
function countDigit($n)  
{  
    if ($n == 0)  
        return 0;  
  
    return (1 + countDigit($n / 10));  
}  
  
// Narcissistic number  
function Narcissistic( $n)  
{  
    $l = countDigit($n);  
    $dup = $n;  
    $sum = 0;  
    while ($dup)  
    {  
        $sum += pow($dup % 10, $l);  
        $dup = (int)$dup / 10;  
    }  
  
    return ($n == $sum);  
}  

// result
$n = 153;  
if (Narcissistic(!$n)) {
  echo "true";  
} else {
  echo "false";
}