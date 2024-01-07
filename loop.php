<?php
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