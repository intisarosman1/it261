<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Travel Calculator</title>
<link href="css/calculator.css" type="text/css" rel="stylesheet">
</head>

<body>
<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>
" method="post">
<fieldset>
<h1>Our Trip Calculator</h1>
<label for="name">Your name:</label>
<input type="text" name ="name" value="
<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>
">
<label for="miles">How many miles will you be driving?</label>
<input type="text" name ="miles" value="
<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ;?>
">
<label for="hours">How many hours per day would you like to be driving?</label>
<input type="text" name ="hours" value="
<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']) ;?>
">

<label for="price">Price per gallon:</label>
<ul>
<li><input type="radio" name ="price" value="3.00"
<?php if(isset($_POST['price']) && $_POST['price'] == '3.00') echo 'checked="checked" ' ;?>>
$3.00</li>
<li><input type="radio" name ="price" value="3.50"
<?php if(isset($_POST['price']) && $_POST['price'] == '3.50') echo 'checked="checked" ' ;?>>
$3.50</li>
<li><input type="radio" name ="price" value="4.00"
<?php if(isset($_POST['price']) && $_POST['price'] == '4.00') echo 'checked="checked" ' ;?>>
$4.00</li>
</ul>

<label for="speed">Speed:</label>
<ul>
<li><input type="radio" name ="speed" value="50"
<?php if(isset($_POST['speed']) && $_POST['speed'] == '50') echo 'checked="checked" ' ;?>>
50 mph</li>
<li><input type="radio" name ="speed" value="60"
<?php if(isset($_POST['speed']) && $_POST['speed'] == '60') echo 'checked="checked" ' ;?>>
60 mph</li>
<li><input type="radio" name ="speed" value="70"
<?php if(isset($_POST['speed']) && $_POST['speed'] == '70') echo 'checked="checked" ' ;?>>
70 mph</li>
</ul>

<label for="fuel">Fuel efficiency:</label>

<select name="fuel">
<option value="" NULL
<?php if(isset($_POST['fuel']) && $_POST['fuel'] == NULL) echo 'selected="unselected" ' ;?>
>Select Fuel Efficiency</option>
<option value="10"
<?php if(isset($_POST['fuel']) && $_POST['fuel'] == '10') echo 'selected="unselected" ' ;?>
>Terrible</option>
<option value="20"
<?php if(isset($_POST['fuel']) && $_POST['fuel'] == '20') echo 'selected="selected" ' ;?>
>Getting better</option>
<option value="30"
<?php if(isset($_POST['fuel']) && $_POST['fuel'] == '30') echo 'selected="selected" ' ;?>
>Good</option>
<option value="40"
<?php if(isset($_POST['fuel']) && $_POST['fuel'] == '40') echo 'selected="selected" ' ;?>
>Great</option>
</select>

<input type="submit" value="Calculate">
<p><a href="">Reset</a></p>
</fieldset>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])) {
    echo '<span class="error">Please fill out your name</span>';
}

if(empty($_POST['miles'])) {
    echo '<span class="error">Please fill out the distance</span>';
}

if(empty($_POST['hours'])) {
    echo '<span class="error">Please fill out how many hours you\'d like to drive per day</span>';
}

if(empty($_POST['price'])) {
    echo '<span class="error">Please fill out your price per gallon</span>';
}

if(empty($_POST['speed'])) {
    echo '<span class="error">Please fill out your speed</span>';
}

if($_POST['fuel'] == NULL) {
echo '<span class="error">Please choose your fuel efficiency</span>';
}


if(isset(
    $_POST['name'],
    $_POST['miles'],
    $_POST['hours'],
    $_POST['price'],
    $_POST['speed'],
    $_POST['fuel']
)) {

$name = $_POST['name'];
$miles = (int)$_POST['miles'];
$hours = (int)$_POST['hours'];
$price = (float)$_POST['price'];
$speed = (int)$_POST['speed'];
$fuel = (int)$_POST['fuel'];

if($hours == 0) {
    $hours = 1;
}
if($fuel == 0) {
    $fuel = 1;
}
$days = floor($miles / $speed / $hours);
$money = $miles / $fuel * ($price);
$gallons = $miles / $fuel;


echo '
<div class="box">
<p><b>'.$name.'</b>, you will be driving '.$miles.' miles.</p>
<p>Your fuel efficiency is '.$fuel.' miles per gallon.</p>
<p>You will need '.$gallons.' gallons of gas.</p>
<p>Your total cost for gas will be $'.$money.'.</p>
<p>You will be driving a total of '.$days.' days!</p>
</div>
';


} // close isset


} // server request

?>
</body>
</html>