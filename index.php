<?php
    //Print
    echo"<h1>Hello World of PHP</h1>";
    echo"<p>This is my first php program.</p>";

    //Variable
    $var = "Sikder";
    echo $var;
    $age = 25;
    echo $age;
    echo "<br>";
    $var1 = "Sikder";
    $var2 = "Md. Shariful";
    $var3 = "Islam";
    echo $var1 ." ". $var2 ." ". $var3. "<br>";


    //Arithmetic Operations
    $var1 = 40;
    $var2 = 20;
    $sum = $var1 + $var2; //60
    $sub = $var1 - $var2; //20
    $mul = $var1 * $var2; //800
    $div = $var1 / $var2; //2
    echo "Num1 = $var1" . "<br>" . "Num2 = $var2 <br>";
    echo "Sum = $sum" . " Sub = $sub" . " Mul = $mul" . " Div = $div";

    $string = "123";
    $number = 45;
    echo "<br>". $result = $string + $number . "<br>"; // $result will be 168 (123 + 45)
    
    //Error
    //$string2 = "abc123";
    //echo "<br>".$result2 = $string2 + $number; 
    // $result2 should be 45 (0 + 45) but it will return error

    //Array in php
    $myArray = ["Sikder", 25, true];
    echo $myArray[0]."<br>";

    //Condition
    $area = "Barishal";
    if($area == "Dhaka")
    {
        echo "Capital";
    }
    else
    {
        echo "Others";
    }

    echo"<br>";

    //for loop
    for($i=0;$i<10;$i++)
    {
        echo $i;
    }
    echo "<br><br>";

    //for loop on array
    $arrayData = ["Sikder", 213002146, "Mujahid", 213002148, "Mahmudul", 213002248];
    for($i=0;$i<count($arrayData);$i++)
    {
       // echo $arrayData[$i] . "<br>";
    }

    //for-each loop on array
    foreach($arrayData as $data)
    {
        echo $data;
    }

    echo "<br>";
    //foreach loop index print
    $arr = [99, 98, 93, 94, 95, 96, 97, 998, 999, 910]; 
    $index = 0; 
    foreach ($arr as $key => $value) 
    { 
        echo "The index is $index and value is"; 
        $index = $key + 1; 
        echo " $value <br>"; 
    }
?>