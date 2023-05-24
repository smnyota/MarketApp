<html>


<body>

<?php
    //associative array: essentially hashmap key value pairs

$input1 = $_POST["areaCode"];
$map = ["314" => "St. Louis", "919" => "Raleigh", "774" => "Houston"];

//calculate area code from phone number
$arcode = substr($input1,0,3);


if (array_key_exists($arcode,$map)){
  $outputText = $map[$arcode];
  }else
  {
  $outputText = "not currently in the database!";
  }

?>

Your area code entered is: <?php echo $arcode; ?> <br>
Your city is : <?php echo $outputText; ?> 


</body>

</html>