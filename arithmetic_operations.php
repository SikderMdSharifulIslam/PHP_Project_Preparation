<?php
    $var1 = 40;
    $var2 = 20;
    $sum = $var1 + $var2; //60
    $sub = $var1 - $var2; //20
    $mul = $var1 * $var2; //800
    $div = $var1 / $var2; //2
    echo "Num1 = $var1" . "<br>" . "Num2 = $var2 <br>";
    echo "Sum = $sum" . " Sub = $sub" . " Mul = $mul" . " Div = $div";

    //special case of php
    $string = "123";
    $number = 45;
    echo "<br>". $result = $string + $number; // $result will be 168 (123 + 45)
    
    //Error
    //$string2 = "abc123";
    //echo "<br>".$result2 = $string2 + $number; 
    // $result2 should be 45 (0 + 45) but it will return error
?>