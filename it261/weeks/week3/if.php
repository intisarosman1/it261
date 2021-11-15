<?php
// The if statement

$temp = 90;
if($temp < 90) {
echo 'not that hot';
} else {
echo 'It\'s a scorcher';
}

echo '<br>';
// We are going to extend the if statement, with an ifelse statement

$temp = 87;
if($temp <= 78) {
echo 'It is liveable';
} elseif($temp <= 85) {
echo 'It\'s getting hotter';
} else {
echo 'It\'s really hot';
}

// Fun with logic
echo '<br>';
$sales = 800000;
$salary = 200000;
if($sales >= 800000) {
$salary *= 1.10;
echo $salary;
} elseif($sales >= 600000) {
$salary *= 1.05;
echo $salary;
} else {
echo $salary;
}


?>