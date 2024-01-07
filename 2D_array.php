<?php
    $students = array(
        "Sikder" => array("Sikder Md. Shariful Islam", 213002146),
        "Mujahid" => array("Md. Mujahid Ibna Siddique", 213002148),
        "Mahmudul" => array("Mahmudul Hasan", 213002248)
    );
    
    foreach($students as $index) {
      foreach($index as $data)
      {
        echo" ".$data;
      }
      echo"<br>";
    }
?>