
<?php

$marks = 60;

// if($marks>=80){
//     echo "The Grade is A+";
// }

// elseif($marks>=70){
//     echo "The grade is A";
// }

// if($marks==80){
//     echo "The Grade is A+";
// }

// elseif($marks==70){
//     echo "The grade is A";
// }

// Switch Case
echo "<h2>Switch Case</h2>";

switch($marks){

    case 80;
    echo "The grade is A+";
    break;

    case 70;
    echo "The grade is A";
    break;

    case 60;
    echo "The grade is A-";
    break;

    default:
    echo "The grade is F";
    break;
}

$rahim = "";

switch($rahim){
    case "car";
    echo "I will go to Cox's Bazar";
    break;

    case "bike";
    echo "I will go to dinner";
    break;

    case "cycle";
    echo "I will go to field";
    break;

    default:
    echo "I will go to sleep";
    break;
}

// Function
echo "<h2>Function</h2>";


function sum ($number1, $number2){
    $x = $number1;
    $y = $number2;

    $result = $x+$y;
    return $result;
}

$sumValue = sum (56, 60);

$number3 = 200;

$secondSumValue = $sumValue+$number3;

echo $secondSumValue."<br>";

$number4 = 100;
$thirdSumValue = $secondSumValue-$number4;

echo $thirdSumValue."<br>";

$number5 = 20;
$fourthSumValue = $sumValue*$number5;

echo $fourthSumValue."<br>";

$number6 = 20;
$fifthSumValue = $fourthSumValue/$number6;

echo $fifthSumValue;

?>