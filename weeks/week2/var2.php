<?php
//More on variables, arithmetic, and additional set functions

$a = '20';
$b = '30';
$c = $a + $b;
echo $c;
echo '<br>';

$a = '700';
$b = '330';
$c = $a - $b;
echo $c;
echo '<br>';

$a = '50';
$b = '5';
$c = $a * $b;
echo $c;
echo '<br>';

$money = 100;
$money /= 7;
echo $money;
echo '<br>';

$money = 100;
$money /= 7;
$friendly_money = number_format($money,2);
echo $friendly_money;
echo '<br>';

$friendly_money = floor($money);
echo $friendly_money;
echo '<br>';
$friendly_money = ceil($money);
echo $friendly_money;
echo '<br>';

$radius = '10';
$pie = 3.14;
$circumference = (2 * $pie) * $radius;
echo $circumference;

$celcius = 14;
$far = ($celcius * 9/5) + 32;
$friendly_far = floor($far);
echo '<br>';
echo ''.$far.' degrees';

echo '<br>';
$canada = 100;
$canada *= .79;
echo $canada;
echo '<p>I have <b>'.$canada.'.00</b> American dollars! </p>';

echo '<br>';
$canada = 1433;
$canada *= .79;
$friendly_canada = ceil($canada);
echo '<p>I have <b>$'.$friendly_canada.'</b> American dollars! </p>';


?>