<?php

    //Let's say we wanted to generate a random number:

    // echo rand();

    //rand() generates a random integer

    // echo rand(0,2);


    $randomValue = rand(-100,100);

    if ($randomValue >0) {
        $descriptionText = "positive";
    } else if ($randomValue < 0) {
        $descriptionText = "negative";
    } else {
        $descriptionText = "zero";
    }


    // echo $randomValue." is ".$descriptionText;
    echo "Out number ".$randomValue." is ".$descriptionText;