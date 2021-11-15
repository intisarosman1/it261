<?php
// For loops

for ($x = 0; $x <= 21; $x += 3) {
    echo "The number is $x <br>";
}

echo '<br>';

for ($celcius = 0; $celcius <= 100; $celcius ++) {
$far = ($celcius * 9/5) + 32;
$friendly_far = floor($far);
echo '<b>Fahrenheit:</b> '.$friendly_far.' <b>Celcius:</b> <span style="color:red; font-weight:bold;
">'.$celcius.' </span><hr>';

}



?>