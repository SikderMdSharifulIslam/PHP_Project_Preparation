<?php
    $var = "Sikder";
    echo $var;
    $age = 25;
    echo $age;
    echo "<br>";
    $var1 = "Sikder";
    $var2 = "Md. Shariful";
    $var3 = "Islam";
    echo $var1 ." ". $var2 ." ". $var3;

    //We can declare and overwrite variables value in php
    $var1 = 40;
    $var1 = "Sikder";
    echo $var1; //output will be Sikder

    //To avoid this phenomena use define keyword
    define("VARI", "40"); //variable name should be uppercase here.
    $VARI = "Sikder";
    echo VARI;
    $var2 = "20";
?>