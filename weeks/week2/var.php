<?php

// var.php

$name = 'Intisar';
$weather = 'Today is a cold sunny day';
$body_temp = 98.6;

echo "My name is $name";
echo '<br>';
echo 'My name is '.$name.'';
echo '<br>';
echo $body_temp;
echo '<br>';
echo 'The normal body temperature is '.$body_temp.' and all is well!';
echo '<br>';
echo '<br>';

$x = 20;
$y = 5;
echo $x;
echo '<br>';
$z = $x + $y;
echo $z;
echo '<br>';

$first_name = 'Intisar';
$last_name = 'Osman';

echo $first_name;' '.$last_name;
echo '<br>';
echo 'Here are the names with a single quote! '.$first_name.' '.$last_name.' ';
echo '<br>';
echo "Here are the names with a double's quote! $first_name $last_name";
echo '<br>';
echo '<br>';

$x = 20;
$x *= 2;
echo $x;
echo '<br>';

$x = 120;
$x /= 2;
echo $x;

echo '<br>';

$x = 120;
$x *= .09;
echo $x;
echo '<br>';

// our first function - number_format()
echo '<br>';
$x = 137;
$x /= 4;
$friendly_x = number_format($x, 1);
echo $friendly_x;
echo '<br>';

echo date('Y');
echo '<br>';
echo date ('l');
echo '<br>';

// arrays (cannot echo)
$fruit[] = 'orange';
$fruit[] = 'banana';
$fruit[] = 'grapes';
$fruit[] = 'apples';
$fruit[] = 'cherries';
echo '<br>';
echo $fruit[3]; // can echo indexed option

$fruit = array(
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries',
);

$fruit = [
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries',
    'strawberries'
];

echo $fruit;
echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);
echo '<br>';
echo '<br>';

$nav[] = 'Home';
$nav[] = 'About';
$nav[] = 'Daily';
$nav[] = 'Contact';
$nav[] = 'Gallery';

echo $nav[0];
echo '<br>';
// associative array
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// index.php is the key of the array and Home is the value
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
echo '<pre>';
var_dump($nav);
echo '</pre>';

echo '<br>';

$show = 'The Society';
$show_actor = 'Kathryn Newton';
$show_genre = 'Mystery';

echo 'My favorite series during 2021 was "'.$show.'" starring, '.$show_actor.', and it is a '.$show_genre.' ';
echo '<br>';
echo '<br>';

?>