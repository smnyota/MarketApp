<?php

$input1 = 1;
$input2 = 8;

// echo "The number ".$input1." is less than the number ".$input2;


// if ($input1 < $input2) {
//     echo "The number ".$input1." is less than the number ".$input2;
// } else if ($input1 > $input2) {
//     echo "The number ".$input1." is greater than the number ".$input2;
// } else  {
//     echo "The number ".$input1." is equal to the number ".$input2;
// }


if ($input1 < $input2) {
    $comparisonText = "less than";
} else if ($input1 > $input2) {
    $comparisonText = "greater than";
} else {
    $comparisonText = "equal to";
}

echo "The number ".$input1." is ".$comparisonText." the number ".$input2."!";


