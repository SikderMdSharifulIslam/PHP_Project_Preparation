<?php
    $sortArray = array(99, 4, 8, 1, 73, 65, 56);
    sort($sortArray); //sort in ascending order
    rsort($sortArray); //sort in descending order
    print_r($sortArray);

    //strlen() for character counting
    $name = "Sikder Md. Shariful Islam";
    echo strlen($name);
    echo str_word_count($name); 

    //palindrome checking
    $data = "DAD";
    if($data == strrev($data))
    {
        echo "Palindrome";
    }
    else
    {
        echo "Not Palindrome";
    }

    //replace word dynamically
    $hello = "Hello World";
    // echo str_replace(the word wanted to replace, the word wanted to place, from which string);
    echo str_replace("Hello", "Gelo", $hello);
?>